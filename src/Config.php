<?php

define("ROOT", "http://localhost/teste-precode");
define("SITE", "Teste Dev Jr PRECODE");

function url($uri): string
{
    if ($uri) {
        return ROOT . "/$uri";
    }
    return ROOT;
}