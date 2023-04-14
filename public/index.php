<?php

//require_once __DIR__ . '/../src/Router.php';

spl_autoload_register(function ($class){

    $class = substr($class, strlen('App\\'));

    require_once __DIR__ . "/../src/$class.php";
});

use App\Controllers\PublicController as Controller;

$router = new App\Router();
$dog = new App\Dog();
$controller = new Controller();

// switch($_SERVER['REQUEST_URI']){
//     case '/':
//         $name = 'Kaspar';
//         require 'views/index.php';
//         break;
//     case '/about':
//         require 'views/about.php';
//         break;
//     default:
//         echo '404';
//         break;
// }