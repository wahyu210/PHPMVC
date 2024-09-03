<?php
// echo "hello php mvc";
// $path = '/index';
// if(isset($_SERVER['PATH_INFO'])){
//     $path = $_SERVER['PATH_INFO'];
// }
// echo $path;
// require __DIR__ . '/../app/view' . $path . '.php';

require_once __DIR__ . '/../vendor/autoload.php';
use MochamadWahyu\Phpmvc\App\Router;
use MochamadWahyu\Phpmvc\Controller\HomeController;
use MochamadWahyu\Phpmvc\Controller\ProductController;

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');
Router::run();
