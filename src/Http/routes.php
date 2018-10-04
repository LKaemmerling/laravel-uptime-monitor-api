<?php


Route::group([
    'prefix' => config('laravel-uptime-monitor-api.routePrefix'),
    'middleware' => config('laravel-uptime-monitor-api.middleware'),
], function () {
    Route::resource('monitor', config('laravel-uptime-monitor-api.controller'));
    Route::get('monitor/count', config('laravel-uptime-monitor-api.controller').'@count');
});
