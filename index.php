<?php

namespace Index;

require_once './vendor/autoload.php';

use DB\DB;
use Dotenv\Dotenv;
use Routes\APIRoutes;
use Routes\WebRoutes;

// test

// echo $_SERVER['REQUEST_METHOD'];
// echo $_SERVER['REQUEST_URI'];
// print_r(WebRouter::$routes);

// test

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router_list = [
    WebRoutes::class,
    APIRoutes::class,
];

$URI = explode("?", $_SERVER['REQUEST_URI'])[0];

$found = FALSE;
foreach($router_list as $router) {
    if(useRouter($router, $URI)) {
        $found = TRUE;
        break;
    }
};
if(!$found) {
    // TODO: 404 
}





function useRouter($routes, $URI) {
    $routes = $routes::routes();
    if (
        !isset($routes[$URI]) ||
        !isset($routes[$URI][$_SERVER['REQUEST_METHOD']])
    )   
        return FALSE;

        $route = $routes[$URI][$_SERVER['REQUEST_METHOD']];
    
        $valid = true;
    
        if (isset($route["middlewares"])) {
            foreach ($route["middlewares"] as $middleware) {
                $check = $middleware::handler();
                $valid = $check && TRUE;
                if (!$valid)
                    break;
            }
        }
    
        if ($valid) {
            $route["controller"]();
        }
    return TRUE;
}
