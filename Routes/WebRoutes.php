<?php

namespace Routes;

require_once './vendor/autoload.php';

use Bramus\Router\Router;
use App\Controllers\UsersController;

$router = new Router();
$router->setNamespace('\App\Controllers');

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
});

$router->get('/users', "UsersController@index");


$router->run();

