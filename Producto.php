<?php

    class Producto {

        const IVA =0.21;
        // private $codigo;
        private static $numProductos =0;
        
        //public function __construct($codigo){ $this->codigo=$codigo; self::$numProductos++;}

        public static function nuevoProducto() {
            self::$numProductos++;
        }

        /*
        public function mostrarResumen(){
            echo "el producto ". $this ->codigo . "es el num ". self::$numProductos;
        }
        */
    }

    Producto::nuevoProducto();
    $impuesto=Producto.IVA;
    echo $impuesto;

    /*
    $prod1=new Producto ("Peras");
    $prod2=new Producto ("limones");
    $prod3=new Producto ("fresas");
    $prod3->mostrarResumen();
    */
?>