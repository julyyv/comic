<?php

namespace Routes;

require_once './vendor/autoload.php';

use Bramus\Router\Router;
use App\Controllers\UsersController;

$router = new Router();
$router->setNamespace('\App\Controllers');

$router->get("/api", function() {
    echo "welcome to API!";
});

$router->set404('/api(/.*)?', function() {
    header('HTTP/1.1 404 Not Found');
    header('Content-Type: application/json');

    $jsonArray = array();
    $jsonArray['status'] = "404";
    $jsonArray['status_text'] = "route not defined";

    echo json_encode($jsonArray);
});

$router->run();
