<?php

require './vendor/autoload.php';

use CoffeeCode\Router\Router;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router = new Router("http://localhost:8000");

/*
 *Controllers 
 */
$router->namespace("App\Controllers");

$router->group(null);

$router->get("/", function () {
    echo 'Home';
});
$router->get('/test', function () {
    echo 'teste';
});

$router->dispatch();

if ($router->error()) {
    //var_dump($router->error());
    $router->redirect("/error/{$router->error()}");
}