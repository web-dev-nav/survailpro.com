<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        if (config('database.default') === 'sqlite') {
            $databasePath = database_path('database.sqlite');
            $directory = dirname($databasePath);

            if (!file_exists($databasePath)) {
                if (!is_dir($directory)) {
                    mkdir($directory, 0755, true);
                }

                touch($databasePath);
            }
        }
    }
}
