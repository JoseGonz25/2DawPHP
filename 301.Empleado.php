<?php
    declare(strict_types=1);

    class Empleado{

        private string $nombre;

        private string $apellido ;

        private float $sueldo ;

        public function __construct(string $nombre, string $apellido ,float $sueldo){

            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->sueldo=$sueldo;

        }

        public function getNom(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public  function getSueldo(): float{
            return $this->sueldo;
        }

        public function setNombre(string $nombre): string{
            $this->nombre=$nombre;

        }

        public function setApellido(string $apellidos): string{
            $this->apellidos=$apellido;
        }

        public function setSueldo(float $sueldo){
            $this->sueldo=$sueldo;
        }
        
        public function getNombreCompleto(): string{

            return $this->nombre ." ".  $this->apellido;
        }

        public function debePagarImpuesto(): bool{

            return $this -> sueldo> 3333?true: false;
        }

    }

$emp1 = new Empleado("pepe","loca",4444);
$emp1->getNombreCompleto();
echo $emp1->debePagarImpuesto()?"Debe pagar impuesto":"No debe pagar impuestos";

?>