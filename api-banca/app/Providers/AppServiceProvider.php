<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Telescope\Telescope;

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
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        if (class_exists(Telescope::class)) {
            try {
                if (!Schema::hasTable('telescope_entries')) {
                    Telescope::stopRecording();
                }
            } catch (\Throwable $e) {
                Telescope::stopRecording();
            }
        }
    }
}
