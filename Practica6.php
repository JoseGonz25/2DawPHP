<?php

session_start();
$nombre=$_SESSION['nombre'];
$edad=$_SESSION['edad'];
$gmail=$_SESSION['gmail'];


echo "hola que hay de nuevo $nombre , $edad , $gmail";

?>