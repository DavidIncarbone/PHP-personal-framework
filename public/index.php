<?php

use App\Router;

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../vendor/autoload.php';

$routes = require __DIR__ . '/../routes/routes.php';

var_dump($routes);

$router = new Router;
$router($routes);
