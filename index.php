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

$router->get("/", 'WebController:home', 'app.home');

$router->group('/produtos');
$router->get('/cadastro', 'ProductController:create', 'products.create');
$router->post('/cadastro', 'ProductController:store', 'products.store');
$router->get('/cadastro/sucesso', 'ProductController:sucess', 'products.sucess');

$router->dispatch();

if ($router->error()) {
    //var_dump($router->error());
    $router->redirect("/error/{$router->error()}");
}