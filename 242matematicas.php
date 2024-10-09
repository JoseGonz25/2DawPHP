<?php

/*
function digitos(int $num): int {
    $count = 0;
    do {
        $count ++;
        $num=intdiv($num,10);
    }while ($num != 0) {
        return $count;
        } 
    }
    

function digitoN(int $num, int $pos): int {
    $digitoPos ="no existe la posicion";
    for ($i = digitos($num); $i >= $pos; $i--) {
        $digitosPos=$num%10;
        $num=intdiv($num,10);
    }
    return $digitoPos;
}
*/
function quitaPorDetras(int $num, int $cant): int {
   
   for($i=0; $i<$cant;$i++)
   $num=intdiv($num,10);
   
    return (int)$num;
}
echo quitaPorDetras(523712564,2);

function quitaPorDelante(int $num, int $cant): int{

    
}
   

?>