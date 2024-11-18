<?php

session_start();

echo session_id();

$_SESSION["nombre"]="jose";
$_SESSION["edad"]="19";
$_SESSION["gmail"]="jose.@gmail.com";


$nombre=$_SESSION["nombre"]="jose";

echo $nombre;

?>

</br>
<a href="Practica6.php"> llamar sesion 2</a>
