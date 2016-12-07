<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

include "autoloader.php";

define("MAIN_DIR", __DIR__);

$route = new \Framework\Route\Route();
$route->add('/', 'Bank\User\Controller\UserController', 'index');
$route->add('/test', 'UserController', 'test');

$route->start();