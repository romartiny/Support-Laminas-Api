<?php
return [
    'api-tools-content-negotiation' => [
        'selectors' => [],
    ],
    'db' => [
        'driver' => \Pdo::class,
        'dsn' => 'mysql:dbname=laminas;host=localhost;user=root;password=root;charset=utf8mb4',
    ],
    'api-tools-mvc-auth' => [
        'authentication' => [
            'adapters' => [
                'basic_http_auth' => [
                    'adapter' => \Laminas\ApiTools\MvcAuth\Authentication\HttpAdapter::class,
                    'options' => [
                        'accept_schemes' => [
                            0 => 'basic',
                        ],
                        'realm' => 'api',
                        'htpasswd' => 'data/htpasswd',
                    ],
                ],
            ],
            'map' => [
                'SupportApi\\V1' => 'basic_http_auth',
            ],
        ],
    ],
];
