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

        $error["message"] = "Falha ao cadastrar. Ocorreu um erro inesperado!";

        $productManagement = new ProductManagement();
        $createProductSchema = (object) ['$ref' => 'file://' . dirname(__FILE__) . '/../Support/schemas/createProductSchema.json'];

        if (!$productManagement->schemaIsValid($data, $createProductSchema)) {
            echo $this->view->render('createProduct', [
                "error" => $error,
            ]);
        }

        $response = $productManagement->createProduct($data)->callback();

        if (!isset($response["message"]) || $response["message"] != "sucesso") {
            $error["message"] = $response["message"] ?? $error["message"];
            $error["code"] = $response["code"] ?? null;
            echo $this->view->render('createProduct', [
                "error" => $error,
            ]);
            return;
        }

        $this->router->redirect("products.success");
    }

    public function success()
    {
        echo $this->view->render('success');
    }
}