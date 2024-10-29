<?php

declare(strict_types=1);

$frase="hola";

function palindromo(string $frase) :bool{

    $frase=strtolower($frase);

    $frase=str_replace(" ","",$frase);

    $infrase=strrev($frase);

    return $infrase==$frase;
}

echo palindromo($frase);

?>