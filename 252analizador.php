<?php

    $frase="ave maria purisima del san cristobal";

    function analizador ($frase){

    $arrFrase=explode(" ",$frase);

    foreach($arrFrase as $value){

        echo $value ."tiene ".strlen($value). "letras";
        $acumulador+=strlen($value);
    }
    echo "Cantidad de palabras ". count($arrFrase). "<br>";
    echo "la cantoidad de letras es : ". $acumulador;
}
?>