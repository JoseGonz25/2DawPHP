<?php

    declare(strict_types=1);

    class Persona {
        private string $nombre;

        private string $apellido ;

        public function __construct(string $nombre, string $apellido){
            $this->nombre=$nombre;
            $this->apellido=$apellido;
        }

        public function getNombre():string {
            return $this->nombre;
        }

        public function getApellido():string {
            return $this->apellido;
        }

        public function setNombre(string $nombre){
            $this->nombre=$nombre;
        }

        public function setApellido(string $apellido){
            $this->apellido=$apellido;
        }

        public function getNombreCompleto(): string{
            return $this->nombre ." ".  $this->apellido;
        }



    }

?>