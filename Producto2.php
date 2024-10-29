<?php

    clas Producto{
        private $codigo;

        public function 
    }


    class Tv extends Producto {
        public function __construct(
            string $codigo , 
            public int $pulgadas ,
            public string $tecnologia){
                $this ->setCodigo ($codigo);
            }
        
        public function mostrarResumen(){
            echo "Codigo ".$this ->getCodigo()."";
            echo 
        }
        
    }

?>