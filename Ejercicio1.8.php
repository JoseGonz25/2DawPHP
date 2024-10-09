<?php

$ladoA=5;
$ladoB=4;
$ladoC=4;

if($ladoA**2===($ladoB**2+$ladoC**2)){
    echo 'es rectangulo';
}else if( ($ladoA===$ladoB || $ladoA===$ladoC ) || ($ladoB===$ladoA || $ladoB===$ladoC)){
    echo 'isosceles ';
}else if($ladoA===$ladoB && $ladoB===$ladoC){
    echo ' escaleno';
}else {
    echo 'escaleno';
}

?>