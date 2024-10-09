<?php

/*
function esPar(int $num): bool{
    return $num%2==0;

}

echo esPar(num:22)?"es par":"es impar";
*/

/*
function  arrayAleatorio(int $tam, int $min, int$max) : array{

    $arrNumAle=array();
    for($i=0;$i<$tam;i++){
        $arrNumAle[$i]=rand($min,$max);
    }
    
    rand

}

*/


function arrayPares(array &$array):int {
    $contPares =0;
    foreach($array as  $value)
        if (esPar($value))
            $contPares++;
    return $contPares;

}




$arrResultado=arrayAleatorio(15,10,100);
mostrarArray($arrResultado);
echo"<br>";
echo arrayPares (
    $arrResultado);

?>