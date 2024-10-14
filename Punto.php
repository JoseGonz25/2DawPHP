<?php

    class Punto{
        protected float $x;
        protected float $y;
        protected float $z;

            public function __construct(
                float $x=0.0,
                float $y=0.0,
                float $z=0.0
            ){
                $this->x = $x;
                $this->y = $y;
                $this->z = $z;
            }
    }

    /* Otra forma con php 8 

    class Punto {

         public function __construct(
            
            protected float $x=0.0,
            protected float $y=0.0,
            protected float $z=0.0

    }
    
    
    
    
    
    
    
    */
?>