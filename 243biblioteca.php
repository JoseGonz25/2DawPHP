<?php

    declare(strict_types=1);

    function sumar(...$entrada):float{

        $resultado=0;

        foreach($entrada as $valor)
            $resultado+=$valor;
        return $resultado;
    }

?>