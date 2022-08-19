<?php

declare(strict_types=1);

use Hyperf\Metric\Adapter\Prometheus\Constants;
use Hyperf\Metric\Adapter\Prometheus\MetricFactory;

return [
    'default' => 'prometheus',
    'metric' => [
        'prometheus' => [
            'driver' => MetricFactory::class,
            'mode' => Constants::SCRAPE_MODE,
            'namespace' => 'tracing_nano',
            'scrape_host' => '0.0.0.0',
            'scrape_port' => '9502',
            'scrape_path' => '/metrics',
        ]
    ]
];
