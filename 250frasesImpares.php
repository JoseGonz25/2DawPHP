<?php

$frase="en un lugar de la mancha";
$resultado="";

for($i=1;$i<strlen($frase);$i+=2){
    $resultado.=$frase[$i];
}
echo $resultado;
?>