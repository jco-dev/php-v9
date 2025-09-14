<?php

return [
    'database' => [
        'type' => env('DB_TYPE', 'mysql'),
        'host' => env('DB_HOST', 'localhost'),
        'database' => env('DB_NAME'),
        // 'user' => 'root',
        'user' => env('DB_USER', 'root'),
        // 'password' => 'root',
        'password' => env('DB_PASSWORD', ''),
    ],
    'error' => env('APP_ERROR') === 'true'
];