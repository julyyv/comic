<?php

namespace App\Models;

use App\Models\Model;

class User extends Model
{
    static function get()
    {
        return [
            "id" => 1,
            "fullName" => "nv a",
            "bio" => "loremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm",
        ];
    }
}