<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('user', new Route(
    constant('URL_SUBFOLDER') . '/user/{id}',
    array('controller' => 'UserController', 'method' => 'showAction'),
    array('id' => '[0-9]+')
));
$routes->add('homepage', new Route(
    constant('URL_SUBFOLDER') . '/',
    array('controller' => 'HomeController', 'method' => 'index')

));
$routes->add('test', new Route(
    constant('URL_SUBFOLDER') . '/test',
    array('controller' => 'TestController', 'method' => 'index')

));

return $routes;
