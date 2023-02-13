<?php

namespace App\Controllers;

require_once './vendor/autoload.php';

use \Helpers\Helpers;

use App\Models\User;

class UsersController
{
    public static function index()
    {
        $user = User::get();
        return Helpers::view(
            "users",    // view name
            [   // data 
                "user" => $user
            ],
            // "Users" // layout, default = default
        );
    }
}
