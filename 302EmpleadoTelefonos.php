<?php

declare(strict_types=1);

class Empleado{

    private string $nombre;

    private string $apellido ;

    private float $sueldo ;

    private array $arrTelefonos=[];

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

    public function anyadirTelefono(int $telefono):void{
        $this->arrTelefonos[]=$telefono;
    }

    public function listarTelefonos ():string{
        $salida="";
        foreach($this->arrTelefonos as $telefono)
            echo $salida. ",". $telefono;
        return $salida;
    }

    public function vaciarTelefonos():void {
        $arrTelefonos=[];
    }

}

$emp1 = new Empleado("pepe","loc",4444);
$emp1->getNombreCompleto();
$emp1->anyadirTelefono(666555777);
$emp1->anyadirTelefono(666999777);
$emp1->anyadirTelefono(666888777);
echo "Listado de telefonos";
echo $emp1->listarTelefonos();
$emp1->vaciarTelefonos();
echo"listado de telefonos vacio";
$emp1->listarTelefonos();

?>