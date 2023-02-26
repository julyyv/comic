<?php

namespace DB;

use PDO;
use PDOException;

class DB
{
    private static $instance = NULL;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            try {
                self::$instance =
                    new PDO(
                        'mysql:host=' . $_ENV["DATABASE_DSN"] .
                            ';dbname=' . $_ENV["DATABASE_NAME"],
                        $_ENV["DATABASE_USERNAME"],
                        $_ENV["DATABASE_PASSWORD"]
                    );
                self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}