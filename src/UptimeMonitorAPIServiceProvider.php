<?php

namespace LKDevelopment\UptimeMonitorAPI;

use Illuminate\Support\ServiceProvider;

class UptimeMonitorAPIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if (config('laravel-uptime-monitor-api.enable')) {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-uptime-monitor-api.php', 'laravel-uptime-monitor-api');
    }
}
