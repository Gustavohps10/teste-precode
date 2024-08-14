<?php

namespace App\Controllers;

use App\Support\ProductManagement;
use JsonSchema\Validator;

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
        $data["status"] = isset($data["status"]) ? "enabled" : "disabled";
        $data = json_decode(json_encode($data), false);

        // Default error message
        $error["message"] = "Falha ao cadastrar. Ocorreu um erro inesperado!";

        $productManagement = new ProductManagement();
        $createProductSchema = (object) ['$ref' => 'file://' . dirname(__FILE__) . '/../Support/schemas/createProductSchema.json'];

        //Check if input is valid and convert data types
        if (!$productManagement->schemaIsValid($data, $createProductSchema)) {
            $_SESSION["error"] = $error;

            $this->router->redirect('products.create');
            return;
        }

        //Check if the product was created
        $response = $productManagement->createProduct($data)->callback();

        if (!isset($response["message"]) || $response["message"] != "sucesso") {
            $error["message"] = $response["message"] ?? $error["message"];
            $error["code"] = $response["code"] ?? null;
            $_SESSION["error"] = $error;

            $this->router->redirect('products.create');
            return;
        }

        $this->router->redirect("products.success");
    }

    public function success()
    {
        echo $this->view->render('success');
    }
}