<?php

    $color=isset();

setcookie("visitas",$cont,time()+3600);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Colores:</label>
            <select name="color">
                <option value="azul">azul</option>
                <option value="rojo">rojo</option>
                <option value="negro">negro</option>
                <option value="verde">verde</option>
                <option value="amarrillo">amarrillo</option>
            </select>
    </form>
</body>
</html>
