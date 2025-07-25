<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class HomeController
{
    public function index(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/homepage.php';
    }
}
