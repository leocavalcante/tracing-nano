<?php declare(strict_types=1);

use Hyperf\Metric\Middleware\MetricMiddleware;
use Hyperf\Tracer\Middleware\TraceMiddleware;

return [
    'http' => [
        MetricMiddleware::class,
        TraceMiddleware::class,
    ],
];
