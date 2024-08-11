<?php

namespace App\Support;

class ProductManagement extends PrecodeHub
{
    public function createProduct($data): ProductManagement
    {
        $this->endpoint = "/products";
        $this->build = [
            "product" => $data
        ];
        $this->post();
        return $this;
    }
}