<?php

declare (strict_types=1);
    
include("247ok.php");
include("247ko.php");

$contraseña=$_GET["password"];
$usuario=$_GET["name"];

$array = [
    "juan" => 222,
    "hola" => 222,
];


if (iset($usuario)&& isset($contraseña)&& !empty($usuario)&& !empty($contraseña)){

    if (array_key_exist($usuario,$array)){

       if ($array[$usuario]==$contraseña){
        header("Location:247ok.php?usuario");
       }else{
        header("Location:247ko.php?mensaje='el ususario es incorecto'")
       }
    }else {
        header("Location:247ko.php?mensaje='el ususario es incorecto'")

    }


}else{

    echo "debes introducir los datos "

}

//usuariocorrecto($usuario,);


?>
