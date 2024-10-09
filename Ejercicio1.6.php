<?php

    $edad=4;
    $nota=4;
    $sexo='F';

    if ($nota<=5 && $edad>=18 && $sexo='F'){
        echo 'Aceptada';
    }else if ($nota<=5 && $edad>=18 && $sexo='M'){
        echo 'posible';

    }else{
        echo 'no aceptable ';
    }

?>