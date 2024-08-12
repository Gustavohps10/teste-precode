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
        $data["sku"] = (int) $data["sku"] ??= 0;
        $data["price"] = (float) $data["price"];
        $data["promotional_price"] = (float) $data["promotional_price"] ??= 0;
        $data["status"] = isset($data["status"]) ? "enabled" : "disabled";
        $data["cost"] = (float) $data["cost"] ??= 0;
        $data["weight"] = (float) $data["weight"] ??= 0;
        $data["width"] = (float) $data["width"] ??= 0;
        $data["height"] = (float) $data["height"] ??= 0;
        $data["length"] = (float) $data["length"] ??= 0;
        $data["volumes"] = (float) $data["volumes"] ??= 0;
        $data["warrantyTime"] = (int) $data["warrantyTime"] ??= 0;

        $productManagement = new ProductManagement();
        $response = $productManagement->createProduct($data)->callback();

        if (isset($response["message"]) && $response["message"] == "sucesso") {
            $this->router->redirect("products.success");
            return;
        }

        $error["message"] = isset($response["message"]) ? $response["message"] : "Falha ao cadastrar. Ocorreu um erro inesperado!";
        $error["code"] = isset($response["code"]) ?? null;

        echo $this->view->render('createProduct', [
            "error" => $error,
            "data" => $data
        ]);
    }

    public function success()
    {
        echo $this->view->render('success');
    }
}