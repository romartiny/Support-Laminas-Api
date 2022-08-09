<?php
return [
    'api-tools-content-negotiation' => [
        'selectors' => [],
    ],
    'db' => [
        'driver' => 'Pdo',
        'dsn'    => 'mysql:dbname=laminas;host=localhost;user=root;password=root;charset=utf8mb4',
    ],
    'api-tools-mvc-auth' => [
        'authentication' => [
            'map' => [
                'SupportApi\\V1' => 'basic_http_auth',
            ],
        ],
    ],
];
