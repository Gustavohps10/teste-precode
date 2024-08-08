<?php

define("ROOT", "http://localhost:8000");
define("SITE", "Teste Dev Jr PRECODE");

function url($uri): string
{
    if ($uri) {
        return ROOT . "/$uri";
    }
    return ROOT;
}