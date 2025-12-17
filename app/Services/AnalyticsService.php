<?php

namespace App\Services;

use Carbon\Carbon;
use Google\Analytics\Data\V1beta\BetaAnalyticsDataClient;
use Google\Analytics\Data\V1beta\DateRange;
use Google\Analytics\Data\V1beta\Dimension;
use Google\Analytics\Data\V1beta\Metric;
use RuntimeException;

class AnalyticsService
{
    protected ?string $propertyId;
    protected ?string $credentialsJson;
    protected ?string $credentialsPath;
    protected int $defaultDays;
    protected int $topPagesLimit;

    public function __construct()
    {
        $settings = $this->loadStoredSettings();

        $this->propertyId = $settings['property_id'] ?? config('analytics.property_id');
        $this->credentialsJson = $settings['credentials_json'] ?? config('analytics.credentials_json');
        $this->credentialsPath = $settings['credentials_path'] ?? config('analytics.credentials_path');
        $this->defaultDays = (int) config('analytics.default_days', 14);
        $this->topPagesLimit = (int) config('analytics.top_pages_limit', 5);
    }

    public function isConfigured(): bool
    {
        if (blank($this->propertyId)) {
            return false;
        }

        if ($this->credentialsJson && $this->looksLikeJson($this->credentialsJson)) {
            return true;
        }

        return $this->credentialsPath && file_exists($this->credentialsPath);
    }

    public function getOverview(int $days = null, int $topPagesLimit = null): array
    {
        if (!$this->isConfigured()) {
            throw new RuntimeException('Analytics is not configured.');
        }

        $days = $days ?? $this->defaultDays;
        $topPagesLimit = $topPagesLimit ?? $this->topPagesLimit;

        $client = $this->makeClient();
        $property = 'properties/' . $this->propertyId;
        $dateRange = new DateRange([
            'start_date' => Carbon::today()->subDays($days - 1)->toDateString(),
            'end_date' => 'today',
        ]);

        $timeseriesReport = $client->runReport([
            'property' => $property,
            'dateRanges' => [$dateRange],
            'dimensions' => [new Dimension(['name' => 'date'])],
            'metrics' => [
                new Metric(['name' => 'activeUsers']),
                new Metric(['name' => 'sessions']),
                new Metric(['name' => 'screenPageViews']),
            ],
        ]);

        $timeseries = [
            'labels' => [],
            'users' => [],
            'sessions' => [],
            'pageviews' => [],
        ];

        $totals = [
            'users' => 0,
            'sessions' => 0,
            'pageviews' => 0,
        ];

        foreach ($timeseriesReport->getRows() as $row) {
            $date = Carbon::createFromFormat('Ymd', $row->getDimensionValues()[0]->getValue());
            $metrics = $row->getMetricValues();

            $timeseries['labels'][] = $date->format('M j');
            $timeseries['users'][] = (int) $metrics[0]->getValue();
            $timeseries['sessions'][] = (int) $metrics[1]->getValue();
            $timeseries['pageviews'][] = (int) $metrics[2]->getValue();

            $totals['users'] += (int) $metrics[0]->getValue();
            $totals['sessions'] += (int) $metrics[1]->getValue();
            $totals['pageviews'] += (int) $metrics[2]->getValue();
        }

        $topPagesReport = $client->runReport([
            'property' => $property,
            'dateRanges' => [$dateRange],
            'dimensions' => [
                new Dimension(['name' => 'pageTitle']),
                new Dimension(['name' => 'pagePath']),
            ],
            'metrics' => [
                new Metric(['name' => 'screenPageViews']),
            ],
            'limit' => $topPagesLimit,
            'orderBys' => [
                ['metric' => ['metricName' => 'screenPageViews', 'orderType' => 'VALUE', 'desc' => true]],
            ],
        ]);

        $topPages = [];
        foreach ($topPagesReport->getRows() as $row) {
            $topPages[] = [
                'title' => $row->getDimensionValues()[0]->getValue() ?: '(untitled)',
                'path' => $row->getDimensionValues()[1]->getValue(),
                'views' => (int) $row->getMetricValues()[0]->getValue(),
            ];
        }

        return [
            'range' => [
                'from' => Carbon::today()->subDays($days - 1)->toDateString(),
                'to' => Carbon::today()->toDateString(),
            ],
            'totals' => $totals,
            'timeseries' => $timeseries,
            'top_pages' => $topPages,
        ];
    }

    protected function makeClient(): BetaAnalyticsDataClient
    {
        $options = [];

        if ($this->credentialsJson && $this->looksLikeJson($this->credentialsJson)) {
            $decoded = json_decode($this->credentialsJson, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new RuntimeException('Invalid GA4 service account JSON.');
            }
            $options['credentials'] = $decoded;
        } elseif ($this->credentialsPath && file_exists($this->credentialsPath)) {
            $options['credentials'] = $this->credentialsPath;
        } else {
            throw new RuntimeException('No GA4 credentials found.');
        }

        return new BetaAnalyticsDataClient($options);
    }

    protected function looksLikeJson(string $value): bool
    {
        return str_contains(trim($value), '{') && str_contains($value, '}');
    }

    protected function loadStoredSettings(): array
    {
        $path = storage_path('app/analytics-settings.json');
        if (!file_exists($path)) {
            return [];
        }

        $data = json_decode(file_get_contents($path), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return [];
        }

        return [
            'property_id' => $data['property_id'] ?? null,
            'credentials_json' => $data['credentials_json'] ?? null,
            'credentials_path' => $data['credentials_path'] ?? null,
        ];
    }
}
