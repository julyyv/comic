<?php

namespace index;

require_once "DB/connection.php";

use DB\DB;

require_once "routes/web.php";

use routes\webRoutes;

require_once "routes/api.php";

use routes\apiRoutes;

// test

// echo $_SERVER['REQUEST_METHOD'];
// echo $_SERVER['REQUEST_URI'];
// print_r($webRoutes);

// test

$routes_list = [
    $webRoutes,
    $apiRoutes,
];

$URI = explode("?", $_SERVER['REQUEST_URI'])[0];

$found = FALSE;
foreach($routes_list as $routes) {
    if(useRoutes($routes, $URI)) {
        $found = TRUE;
        break;
    }
};
if(!$found) {
    // TODO: 404 
}





function useRoutes($routes, $URI) {
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
