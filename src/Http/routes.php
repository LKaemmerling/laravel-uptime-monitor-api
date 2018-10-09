<?php


Route::group([
    'prefix' => config('laravel-uptime-monitor-api.routePrefix'),
    'middleware' => config('laravel-uptime-monitor-api.middleware'),
], function () {
    Route::resource('monitor', config('laravel-uptime-monitor-api.controller'));
    Route::post('monitor/enable/{id}', config('laravel-uptime-monitor-api.controller').'@enable');
    Route::post('monitor/disable/{id}', config('laravel-uptime-monitor-api.controller').'@disable');
});
