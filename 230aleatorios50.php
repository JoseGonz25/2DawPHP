<?php

$numeros=[];

for($i=0;$i<50;$i++){

    $numeros[$i]=rand(1,99);

}

echo "<ul>";

for($i=0 ; $i< count($numeros) ; $i++){ /* tambien un for each o un sizeof*/

    echo " <li>";
        echo $numeros[$i];
    echo "</li> ";
}

echo "</ul>";

//meto el ul fuera del fro para que consuma menos recursos 

?>