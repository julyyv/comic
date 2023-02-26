<?php

namespace App\Controllers;

require_once './vendor/autoload.php';

use Helpers\Helpers;

use App\Models\User;

class UsersController
{
    public static function index()
    {
        // $user = new User;
        // $user->id = 5;
        // $user->username = "username 5";
        // $user->save();

        $user = User::where("id", 1)->first();
        return Helpers::view(
            "users",    
            [ 
                "user" => $user
            ],
            "main", // layout
        );
    }
}
