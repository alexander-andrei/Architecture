<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "autoloader.php";

define("MAIN_DIR", __DIR__);

$route = new \Framework\Route\Route();
$route->add('/', 'Presentation\Controllers\User\UserController', 'index');
$route->add('/register', 'Presentation\Controllers\User\UserController', 'register');

$route->start();