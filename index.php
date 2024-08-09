<?php

require './vendor/autoload.php';

use CoffeeCode\Router\Router;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router = new Router("http://localhost/teste-precode");

/*
 *Controllers 
 */
$router->namespace("App\Controllers");

$router->group(null);

$router->get("/", 'WebController:home');
$router->get('/test', function () {
    echo 'teste';
});

$router->dispatch();

if ($router->error()) {
    //var_dump($router->error());
    $router->redirect("/error/{$router->error()}");
}