<?php

namespace Index;

require_once './vendor/autoload.php';

use Dotenv\Dotenv;

// test

// echo $_SERVER['REQUEST_METHOD'];
// echo $_SERVER['REQUEST_URI'];
// print_r(WebRouter::$routes);

// test

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once("./DB/connection.php");

require_once("./Routes/WebRoutes.php");
require_once("./Routes/APIRoutes.php");