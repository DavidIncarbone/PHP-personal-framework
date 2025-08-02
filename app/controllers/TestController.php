<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class TestController
{
    public function index(RouteCollection $routes)
    {
        require_once APP_ROOT . '/config/config.php';
    }
}
