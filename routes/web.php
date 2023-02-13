<?php

namespace routes;

require_once './vendor/autoload.php';

use App\Controllers\UsersController;
use App\Middlewares\Auth;

$webRoutes = [
    "/" => [
        "GET" => [
            "middlewares" => [
                // Auth::class,
            ],
            "controller" => function() {
                echo "welcome!";
            },
        ],
    ],
    "/users" => [
        "GET" => [
            "controller" => UsersController::index(...),
        ],
    ],
];
