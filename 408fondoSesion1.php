<?php
session_start();
if (isset($_SERVER["REQUEST_METHOD"]=="POST")){

    $_SESSION['colorFondo']=$_POST['color'];
}

$color=isset($_SESSION['colorFondo'])?$_SESSION['colorFondo']:"white";

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
    <form method="POST" background-color: blue>
        <label>Colores:</label>
            <select name=<?php $color?>>
                <option value="azul">azul</option>
                <option value="rojo">rojo</option>
                <option value="negro">negro</option>
                <option value="verde">verde</option>
                <option value="amarrillo">amarrillo</option>
            </select>
    </form>
    <a href="408fondoSesion2.php">
</body>
</html>
