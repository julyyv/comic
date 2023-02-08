<?php

namespace models;

class User
{
    public $id;
    public $title;
    public $content;

    static function get()
    {
        return [
            "id" => 1,
            "fullName" => "nv a",
            "bio" => "loremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm",
        ];
    }
}