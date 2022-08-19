<?php

declare(strict_types=1);

use GuzzleHttp\Client;
use Hyperf\Config\ConfigFactory;
use Hyperf\Contract\ConfigInterface;
use Hyperf\Di\ClassLoader;
use Hyperf\Framework\Logger\StdoutLogger;
use Hyperf\Nano\App;
use Hyperf\Nano\Factory\AppFactory;
use Hyperf\Tracer\Aspect\HttpClientAspect;
use Psr\Log\LoggerInterface;

const BASE_PATH = __DIR__;
require_once BASE_PATH . '/vendor/autoload.php';

[HttpClientAspect::class]; // to trigger proxy creation
ClassLoader::init();

$container = AppFactory::createApp()->getContainer();
$container->define(ConfigInterface::class, ConfigFactory::class);
$container->define(LoggerInterface::class, StdoutLogger::class);

$app = new App($container);

$app->get('/', function (Client $client): string {
   $response = $client->get('http://httpbin.org/get');
   return $response->getBody()->getContents();
});

$app->run();
