<?php

declare(strict_types=1);

use Hyperf\Tracer\Adapter\JaegerTracerFactory;
use Jaeger\Config;
use const Jaeger\SAMPLER_TYPE_CONST;

return [
    'default' => 'jaeger',
    'enable' => [
        'guzzle' => true,
    ],
    'tracer' => [
        'jaeger' => [
            'driver' => JaegerTracerFactory::class,
            'name' => 'tracing-nano',
            'options' => [
                'sampler' => [
                    'type' => SAMPLER_TYPE_CONST,
                    'param' => true,
                ],
                'logging' => true,
                'dispatch_mode' => Config::JAEGER_OVER_BINARY_HTTP,
            ],
        ],
    ],
];
