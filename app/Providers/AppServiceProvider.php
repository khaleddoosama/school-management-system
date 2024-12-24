<?php

namespace App\Providers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Log::info('X-Forwarded-Proto: ' . request()->header('x-forwarded-proto'));
        Log::info('app environment: ' . $this->app->environment());
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}