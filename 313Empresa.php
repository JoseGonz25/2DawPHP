<?php

 declare(strict_types=1);
include_once("312Trabajador.php");
 abstract class Empresa {

    private $trabajadores;
    private string $direccion;  
    
    function __construct(
        string $nombre,
        string $apellidos,
        string $edad,
        ){
            $this->$trabajadores=[];
        }

    function getNombre();
    function setNombre(string $nombre);

    function getDireccion (){
        return $this->direccion;
    }

    function setDireccion(string $direccion){
        return $this ->direccion=$direccion ;
    }

    public function anyadirTrabajador($t){
        return $this->getTrabajador()[]=$t;
    }




         

 }

?>