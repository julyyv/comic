<?php

namespace controllers;

require_once "helpers/helpers.php";

use \helpers\helpers;

require_once "src/models/User.php";

use \models\User;

class UsersController
{
    public static function index()
    {
        $user = User::get();
        return helpers::view(
            "users",    // view name
            [   // data 
                "user" => $user
            ],
            "Users" // layout, default = default
        );
    }
}
