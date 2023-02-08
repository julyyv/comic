<?php

namespace routes;

require_once "src/controllers/UsersController.php";
use controllers\UsersController;

require_once "src/middlewares/auth.php";
use middlewares\Auth;

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
