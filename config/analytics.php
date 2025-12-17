<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Google Analytics 4
    |--------------------------------------------------------------------------
    |
    | Provide your GA4 property ID and service account credentials so the admin
    | dashboard can fetch metrics. You can either paste the JSON key into
    | GA4_SERVICE_ACCOUNT_JSON or store the file on disk and point
    | GA4_CREDENTIALS_PATH at it (default: storage/app/ga-service-account.json).
    |
    */
    'property_id' => env('GA4_PROPERTY_ID'),
    'credentials_json' => env('GA4_SERVICE_ACCOUNT_JSON'),
    'credentials_path' => env('GA4_CREDENTIALS_PATH', storage_path('app/ga-service-account.json')),
    'default_days' => 14,
    'top_pages_limit' => 5,
];
