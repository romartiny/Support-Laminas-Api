<?php
return [
    'service_manager' => [
        'factories' => [
            \SupportApi\V1\Rest\Tickets\TicketsResource::class => \SupportApi\V1\Rest\Tickets\TicketsResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'support-api.rest.tickets' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tickets[/:tickets_id]',
                    'defaults' => [
                        'controller' => 'SupportApi\\V1\\Rest\\Tickets\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'support-api.rest.tickets',
        ],
    ],
    'api-tools-rest' => [
        'SupportApi\\V1\\Rest\\Tickets\\Controller' => [
            'listener' => \SupportApi\V1\Rest\Tickets\TicketsResource::class,
            'route_name' => 'support-api.rest.tickets',
            'route_identifier_name' => 'tickets_id',
            'collection_name' => 'tickets',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \SupportApi\V1\Rest\Tickets\TicketsEntity::class,
            'collection_class' => \SupportApi\V1\Rest\Tickets\TicketsCollection::class,
            'service_name' => 'tickets',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'SupportApi\\V1\\Rest\\Tickets\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'SupportApi\\V1\\Rest\\Tickets\\Controller' => [
                0 => 'application/vnd.support-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'SupportApi\\V1\\Rest\\Tickets\\Controller' => [
                0 => 'application/vnd.support-api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \SupportApi\V1\Rest\Tickets\TicketsEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'support-api.rest.tickets',
                'route_identifier_name' => 'tickets_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \SupportApi\V1\Rest\Tickets\TicketsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'support-api.rest.tickets',
                'route_identifier_name' => 'tickets_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'SupportApi\\V1\\Rest\\Tickets\\Controller' => [
            'input_filter' => 'SupportApi\\V1\\Rest\\Tickets\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'SupportApi\\V1\\Rest\\Tickets\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => '3',
                            'max' => '20',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'title',
                'description' => 'name of the title',
                'error_message' => 'Wrong title name',
                'field_type' => 'string',
            ],
            1 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => '6',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [
                            'charlist' => '',
                        ],
                    ],
                ],
                'name' => 'question',
                'description' => 'text of the question',
                'field_type' => 'string',
                'error_message' => 'Wrong text question',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'status',
                'field_type' => 'string',
                'description' => 'status of ticket',
            ],
            3 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'timestamp',
                'field_type' => 'timestamp',
                'description' => 'time of create ticket',
                'error_message' => 'Wrong timestamp',
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authorization' => [
            'SupportApi\\V1\\Rest\\Tickets\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
        ],
    ],
];
