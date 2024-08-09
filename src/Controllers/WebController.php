<?php

namespace App\Controllers;

class WebController extends Controller
{
    public function home()
    {
        echo $this->view->render('home');
    }
}