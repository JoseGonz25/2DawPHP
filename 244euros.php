<?php

    declare (strict_types=1);

    function pesetas2euros(float $cantidad, float $cotizacion=166.386){
        $cantidad/=$cotizacion;
        return $cantidad;
    }

    function euros2pesetas(float $cantidad , float $cotizacion=166.386){
        $cantidad*=$cotizacion;
        return $cantidad;
    }

?>