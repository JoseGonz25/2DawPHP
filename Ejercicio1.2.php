<?php
    $a=1000;

   $horas= $a/60;

   $min= $a%60;
   
   echo 'horas:'. intval($horas);

   echo 'mins:'. $min;

   // en vez de usar la funcion podemos hacer el 1000 entre 60 ($horas) y a eso le restas el $min/100

?>