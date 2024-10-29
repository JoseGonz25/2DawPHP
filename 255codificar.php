<?php

declare(strict_types=1);

const MIN_MINUS=65;
const MAX_MINUS=90;
const MIN_MAYUS=97;
const MAX_MAYUS=122;

$frase="HOLAQUEtal";

function codificar(string $frase, int $desplazamiento):string{

$resultado="";
//comprobamos desplazamiento correcto 
    if ($desplazamiento>=0){
        //recorremos cadena 
        for ($i=0;$i<strlen($frase);$i++){
            //comprobamos si el codigo ascii corresponde a los de las letras min y mayus 
            if (ord($frase[$i])>=MIN_MINUS && ord($frase[$i])<=MAX_MINUS){
                //comprobamos si es mayus
                if (ord ($frase[$i+])+$desplazamiento>MAX_MIN){
                    $resultado.=chr((MAX_MAYUS-ord($frase[$i]))+$desplazamiento+MIN_MINUS-1);
                }else {
                    $resultado.=chr(ord($frase[$i])+$desplazamiento)
                }
            }else if (ord($frase[$i])>=MIN_MAYUS && ord($frase[$i])<=MAX_MAYUS){
                //si es minus
                if (ord ($frase[$i+])+$desplazamiento>MAX_MAYUS){
                    $resultado.=chr((MAX_MINUS-ord($frase[$i]))+$desplazamiento+MIN_MINUS-1);
                }else {
                    $resultado.=chr(ord($frase[$i])+$desplazamiento)
                }
            }else {
                $resultado=.=$frase[$i];
            }
        
        
        }
    }else{
        $resultado="el desplazamiento incorrecto";
    }
 return $resultado;

}

echo codificar($frase,3);



?>