<?php
declare(strict_types=1);
include_once("307Persona.php");

class Empleado extends Persona {

    private float $sueldo ;

    private array $arrTelefonos=[];

    private static float $sueldotope;

    public function __construct(string $nombre, string $apellido ,float $sueldo=1000){
        $this->sueldo=$sueldo;
        parent::__construct($nombre, $apellido);
    }

    public  function getSueldoTope(): float{
        return $this->sueldotope;
    }

    public function setSueldoTope(float $sueldotope){
        self::$sueldotope=$sueldotope;
    }

    public  function getSueldo(): float{
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo){
        $this->sueldo=$sueldo;
    }
    

    public function getTelefonos(): int {
        return $this->arrTelefonos;
    }

    public function debePagarImpuesto(): bool{

        return $this -> sueldo> self::$sueldotope;
    }

    public function anyadirTelefono():void{
        $this->arrTelefonos[] = $telefono;

    }

    public function listarTelefonos ():string{
        $salida="";
        foreach($this->arrTelefonos as $telefono)
            echo $salida. ",". $telefono;
        return $salida;
    }   

    public function vaciarTelefonos():void {
        $this->arrTelefonos = [];
    }

    public static function toHtml(Empleado $emp): string{
        echo "<br> <p>".$emp->nombre."</p>";
        echo "<br> <p>".$emp->apellido."</p>";
        echo "<br> <p>".$emp->sueldo."</p>";
        echo "<br> <p>".$emp->sueldotope."</p>";
        echo "<ol>";
        for ($i=0 ; $i<cont($emp->arrTelefonos); $i++){
            echo "<li>";
            echo "<br> <p>".arrTelefono[$i]."</p>";
            echo "</li>";
        }
        echo "</ol>";
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