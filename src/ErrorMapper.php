<?php

define("ERROR_MAPPER", [
    [
        "code" => "1",
        "message" => "É permitido apenas campo inteiro para o SKU pai.",
        "field" => "sku",
    ],
    [
        "code" => "2",
        "message" => "SKU pai já existe.",
        "field" => "sku",
    ],
    [
        "code" => "3",
        "message" => "Título do produto deve ter no mínimo 20 caracteres.",
        "field" => "name",
    ],
    [
        "code" => "4",
        "message" => "Descrição deve possuir no mínimo 100 caracteres.",
        "field" => "description"
    ],
    [
        "code" => "5",
        "message" => "O produto deve ter pelo menos uma variação (variations). Caso o produto seja único, basta não enviar dos dados das especificações",
        "field" => "variations"
    ],
    [
        "code" => "6",
        "message" => "É permitido apenas campo inteiro na variação do SKU.",
        "field" => "variations"
    ],
    [
        "code" => "7",
        "message" => "Não é permitido inserir variações com SKU repetido.",
        "field" => "variations"
    ],
    [
        "code" => "8",
        "message" => "Não é permitido inserir variações com Ref repetido.",
        "field" => "variations"
    ],
    [
        "code" => "9",
        "message" => "Não é permitido inserir variações com código EAN repetido",
        "field" => "variations"
    ],
    [
        "code" => "10",
        "message" => " Combinações de especificação: {valores} não permitido.",
        "field" => ""
    ],
    [
        "code" => "11",
        "message" => " Valor não preenchido na especificação {json->variations[x]->ean->specifications[y]->key}.",
        "field" => ""
    ],
    [
        "code" => "12",
        "message" => " Valor preenchido para especificação vazia {json->variations[x]->ean->specifications[y]->value}.",
        "field" => ""
    ],
    [
        "code" => "13",
        "message" => " URL {url} é inválida.",
        "field" => "images"
    ],
    [
        "code" => "14",
        "message" => " URL {url} é extensão inválida. Aceito apenas JPG.",
        "field" => "images"
    ],
    [
        "code" => "15",
        "message" => " URL {url} As dimensões da foto tem ser iguais, ou seja, um quadro",
        "field" => ""
    ],
    [
        "code" => "16",
        "message" => " URL {url} Imagem possui {tamanho}px e é grande para ser processada. Aceito somente abaixo de 1200px",
        "field" => ""
    ],
    [
        "code" => "17",
        "message" => " URL {url} Imagem muito pequena. Aceito somente acima de 500px",
        "field" => ""
    ],
    [
        "code" => "18",
        "message" => " Campo price tem que ser numérico. exemplo: 1200.00",
        "field" => ""
    ],
    [
        "code" => "19",
        "message" => " Campo promotional_price tem que ser numérico. exemplo: 1200.00",
        "field" => ""
    ],
    [
        "code" => "20",
        "message" => " Campo cost tem que ser numérico. exemplo: 1200.00",
        "field" => ""
    ],
    [
        "code" => "21",
        "message" => " Campo promotional_price não pode ser menor que o campo price.",
        "field" => ""
    ],
    [
        "code" => "22",
        "message" => " Diferença de custo (cost) maior que 50 porcento.",
        "field" => ""
    ],
    [
        "code" => "23",
        "message" => " Campo peso (weight) tem que ser numérico entre 0.001 kg à 9999 kg.",
        "field" => ""
    ],
    [
        "code" => "24",
        "message" => " Campo Largura (width) tem que ser numérico entre 0.001 cm à 9999 cm.",
        "field" => ""
    ],
    [
        "code" => "25",
        "message" => " Campo Altura (height) tem que ser numérico entre 0.001 cm à 9999 cm.",
        "field" => ""
    ],
    [
        "code" => "26",
        "message" => " Campo profundidade (height) tem que ser numérico entre 0.001 cm à 9999 cm.",
        "field" => ""
    ],
    [
        "code" => "27",
        "message" => " Campo Marca (brand) obrigatório.",
        "field" => ""
    ],
    [
        "code" => "28",
        "message" => " Campo status aceito enabled ou disabled",
        "field" => ""
    ],
    [
        "code" => "29",
        "message" => " Tempo de garantia (warrantyTime) campo inteiro de 0 a 120 meses.",
        "field" => ""
    ],
    [
        "code" => "30",
        "message" => " Erro inesperado. Informe o JSON para a Precode.",
        "field" => ""
    ],
]);