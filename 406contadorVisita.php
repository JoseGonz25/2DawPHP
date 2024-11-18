<?php

    if(isset($_GET['reiniciar'])){
        setcookie("visitas",$cont,time()-3600);
        echo "contador reiniciado";
    }

    if(issert($_COOKIE['visitas'])){

    }





?>










/*



setcookie("visitas",$cont,time()+3600);
$cont=1;

$valorresp=$_GET["resp"];

if ($valorresp=="No"){
    if(issert($_COOKIE['visitas'])){

        $cont++;
        echo  $_COOKIE["visitas"];
    }
 
}
$cont=0;
echo $_COOKIE["visitas"];

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
    <form action="406contadorVisita.php" method="get">
    <label for="resp">¿quieres reiniciar el contador </label>
    <input name="resp1" id="respuestaSi"type="radio" >Si
    <input name="resp2" id="respuestaNo"type="radio" >No
    <input type="submit" value="Enviar">
    </form>
</body>
</html>