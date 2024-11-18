<?php

if ($_SERVER["RESQUEST_METHOD"]=="POST"){
    if (issert ($_POST["bntSubir"])&& $_POST["btnSubir"]=="Subir"){
        if (is_uploaded_file($_FILES["archivo"]["tmp_name"])){
            $nombre=microtime(). $_FILES["archivo"]["name"];
            move_uploaded_file($_FILES["archivo"]["tmp_name"], "./descargas/{$nombre}" );

            echo "el archivo $nombre subido con exito ";

            $ancho=$_POST['ancho'];
            $alto=$_POST['alto'];
            echo "<img src=' ./descargas/{$nombre}'height='$alto' width)='$ancho'>";
        }
    }else{
        echo "acceso no autorizado ";
    }
}

?>