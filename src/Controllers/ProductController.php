<?php

namespace App\Controllers;

class ProductController extends Controller
{
    public function create()
    {
        echo $this->view->render('createProduct');
    }
}