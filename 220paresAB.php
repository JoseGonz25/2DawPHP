<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/*: Escribe un programa que muestre los números pares del 0 al 50 (dentro de una lista desordenada).*/

echo "<ul></ul>";

    for($i=$_GET["num1"];$i<=$_GET["num2"];$i+=2){
       
        if ($i%2!===0){
            $i++;
        }
        echo "<il> $i</il>";

    }

?>
</body>
</html>