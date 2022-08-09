<?php
return [
    'api-tools-content-negotiation' => [
        'selectors' => [],
    ],
    'db' => [
        'adapters' => [
            'ticket_database' => [],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authentication' => [
            'map' => [
                'SupportApi\\V1' => 'basic_http_auth',
            ],
        ],
    ],
];
