<?php

$frase="en un lugar de la mancha";


$arrVocale=['a'=>0, 'e'=>0, 'i'=>0,'o'=>0,'u'=>0 ];

$frase=strtolower($frase);

foreach($arrVocaleas key=>$value){
    $arrVocale[$key]=substr_count($frase,$key);
}

functioncontarVocales($frase): int {

    $acumulador=0;
    foreach($GLOBALS[$arrVocaleas] as  key=>$value){
        $arrVocale[$key]=substr_count($frase,$key);
        $acumulador+=substr_count($frase,$key);
    }

    return $acumulador

}

var_dump($arrVocale);
printf("El total es %d", contarVocales($frase));

?>