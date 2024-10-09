<?php
    /*Diseñar un algoritmo que nos diga el dinero que tenemos (en euros y céntimos) después
de pedirnos cuantas monedas tenemos (de 2€, 1€, 50 céntimos, 20 céntimos o 10
céntimos).*/


$moneda2=40;

$moneda1=20;

$moneda50cent=3;

$moneda20cent=3;

$moneda10cent=3;
    

$totaleuros=($moneda2*2)+$moneda1;

$valor50cent=$moneda50cent*0.5;
$valor20cent=$moneda50cent*0.2;
$valor10cent=$moneda50cent*0.1;

$totaldinero=$totaleuros+$valor50cent+$valor20cent+$valor10cent;


?>