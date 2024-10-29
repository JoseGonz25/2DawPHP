<?php

 declare(strict_types=1);
 abstract class Persona{

     function __construct(
         private string $nombre,
         private string $apellidos,
         private int $edad

     ){}
     
     public function getNombre() : string{
         return $this->nombre;
     }

     public function getApellidos() : string{
         return $this->apellidos;
     }

     public function getEdad() : int{
        return $this->edad;
    }

     public function setNombre(string $nombre){
         $this->nombre = $nombre;   
     }

     public function setApellidos(string $apellidos){
         $this->apellidos = $apellidos;
     }

    public function setEdad(int $edad){
        $this->edad = $edad;
    }

    function getNombreCompleto() : string {
         return $this->nombre . " " . $this->apellidos;

    }

    public function abstract toHTML();

 }

 abstract class Trabajador extends Persona {

    private $telefonos = array();
    function __construct(
        private string $nombre,
        private string $apellidos,
        private string $edad,
        private float $sueldo){

        parent::__construct($nombre,$apellidos,$edad);
        
       
    } 

    function getTelefonos() : array{
        return $this->telefonos;
    }

    public function debePagarImpuestos() :bool{

        return $this->sueldo > self::$sueldoTope && $this->edad > 21;

    }
    public function anyadirTelefono(int $telefono) : void {

        array_push($this->telefonos,$telefono);

    }

    public function listarTelefonos() : string {
       
        return implode(' ,',$this->telefonos);

    }
    
    public function vaciarTelefono() : void {

        $this->telefonos = array();
    }

    public abstract function calcularSueldo();
    public function abstract toHTML();



}


class Empleado extends Trabajador{

    function __construct(
        private string $nombre,
        private string $apellidos,
        private string $edad,
        private float $horasTrabajadas,
        private float $precioPorHoras ){

        parent::__construct($nombre,$apellidos,$edad);

       
    } 

    public function setSueldoTope(float $sueldoTope) : void{
        $this->$sueldoTope = $sueldoTope;
    }
    
    function getSueldo() : float {
        return $this->sueldo;
    }


    function getTelefonos() : array{
        return $this->telefonos;
    }

    public function debePagarImpuestos() {

        return $this->sueldo > self::$sueldoTope && $this->edad > 21;

    }
    public function anyadirTelefono(int $telefono) : void {

        array_push($this->telefonos,$telefono);

    }

    public function listarTelefonos() : string {
       
        return implode(' ,',$this->telefonos);

    }


    
    public function vaciarTelefono() : void {

        $this->telefonos = array();
    }

    public abstract function toHTML(Persona $p): string {
        if($p instanceof Empleado){
            $html = '<p>Nombre completo: ' . $p->getNombreCompleto() . '</p>';
            $html .= '<p>Sueldo: ' . $p->getSueldo() . '</p>';
            
            $telefonos = $p->getTelefonos();
            if (!empty($telefonos)) {
                $html .= '<p>Teléfonos:</p>';
                $html .= '<ul>';
                foreach ($telefonos as $telefono) {
                    $html .= '<li>' . $telefono . '</li>';
                }
                $html .= '</ul>';
            } else {
                $html .= '<p>No hay teléfonos registrados.</p>';
            }
        }
        return $html;
    }

    public function __toString() : string{
        return self::class . ":" . $this->nombre . " " . $this->apellidos . " " .$this->sueldo ." ". $this->edad . " Telefonos: " . $this->listarTelefonos();
    }


}


?>