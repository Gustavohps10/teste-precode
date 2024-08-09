<?php

namespace App\Controllers;

use League\Plates\Engine;

abstract class Controller
{
    protected $view;
    protected $router;

    public function __construct($router)
    {
        $this->router = $router;
        $this->view = new Engine(dirname(__DIR__, 2) . "/src/views/pages", "php");
        $this->view->addData(["router" => $this->router]);
    }
}