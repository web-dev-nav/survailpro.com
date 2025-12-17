<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalyticsSettingsController extends Controller
{
    public function edit()
    {
        $settings = $this->readSettings();

        return view('admin.analytics-settings.edit', [
            'settings' => $settings,
        ]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'property_id' => ['nullable', 'string'],
            'credentials_json' => ['nullable', 'string'],
        ]);

        $settings = [
            'property_id' => $validated['property_id'] ?? null,
            'credentials_json' => $validated['credentials_json'] ?? null,
            'credentials_path' => null,
        ];

        $this->writeSettings($settings);

        return redirect()->route('admin.analytics.edit')->with('status', 'Analytics settings saved.');
    }

    protected function readSettings(): array
    {
        $path = storage_path('app/analytics-settings.json');
        if (!file_exists($path)) {
            return [
                'property_id' => null,
                'credentials_json' => null,
            ];
        }

        $data = json_decode(file_get_contents($path), true);
        return [
            'property_id' => $data['property_id'] ?? null,
            'credentials_json' => $data['credentials_json'] ?? null,
        ];
    }

    protected function writeSettings(array $data): void
    {
        $path = storage_path('app/analytics-settings.json');
        if (!is_dir(dirname($path))) {
            mkdir(dirname($path), 0775, true);
        }

        file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT));
    }
}
