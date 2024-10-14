<?php

declare (strict_types=1);

include_once("244euros.php");

$cantidad = $_GET['cantidad'];

   

echo "<table>";
for($i=0;$i<$cantidad;$i++){
    $product=$_GET['produc'.$i];
    $precio=$_GET['precio'.$i];
    echo "<tr>";
        echo "<td>". $product ."</td>";
        echo "<td>". $precio ."</td>";
        echo "<td>". euros2pesetas(intval($precio)) ."</td>";
    echo "</tr>";
}
echo "</table>";

?>