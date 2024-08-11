<?php

namespace App\Controllers;

use App\Support\ProductManagement;

class ProductController extends Controller
{
    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function create()
    {
        echo $this->view->render('createProduct');
    }

    public function store($data)
    {
        $data["sku"] = (int) $data["sku"];
        $data["price"] = (float) $data["price"];
        $data["promotional_price"] = (float) $data["promotional_price"];
        $data["status"] = isset($data["status"]) ? "enabled" : "disabled";
        $data["cost"] = (float) $data["cost"];
        $data["weight"] = (float) $data["weight"];
        $data["width"] = (float) $data["width"];
        $data["height"] = (float) $data["height"];
        $data["length"] = (float) $data["length"];
        $data["volumes"] = (float) $data["volumes"];
        $data["warrantyTime"] = (int) $data["warrantyTime"];

        $productManagement = new ProductManagement();
        $response = $productManagement->createProduct($data)->callback();

        if ($response["message"] == "sucesso") {
            echo "Sucesso";
            // $this->router->redirect("products.sucess");
            return;
        }
        echo "erro";

        // $this->router->redirect("products.create");
    }

    public function sucess()
    {
        echo 'Sucesso';
    }
}