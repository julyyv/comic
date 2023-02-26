<?php

namespace Routes;

require_once './vendor/autoload.php';

use App\Controllers\UsersController;
use App\Middlewares\Auth;

class WebRoutes
{
    static function routes()
    {
        return [
            "/" => [
                "GET" => [
                    "middlewares" => [
                        // Auth::class,
                    ],
                    "controller" => function () {
                        echo "welcome!";
                    },
                ],
            ],
            "/users" => [
                "GET" => [
                    "controller" => UsersController::index(...),
                ],
            ]
        ];
    }
}
