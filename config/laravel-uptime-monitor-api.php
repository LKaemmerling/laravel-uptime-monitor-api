<?php

return [
    'enable' => true,
    'routePrefix' => 'api',
    'middleware' => ['api'],
    'controller' => \LKDevelopment\UptimeMonitorAPI\Http\Controller\MonitorController::class,
    'validationRules' => [
        'url' => 'required|url',
        'look_for_string' => 'string',
        'uptime_check_interval_in_minutes' => 'required|numeric',
    ],
];
