<?php

namespace App\Support;

use JsonSchema\Constraints\Constraint;
use JsonSchema\Validator;

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

    public function schemaIsValid($data, $schema): bool
    {
        $validator = new Validator();
        $validator->validate(
            $data,
            $schema,
            Constraint::CHECK_MODE_COERCE_TYPES
        );

        return $validator->isValid();
    }
}