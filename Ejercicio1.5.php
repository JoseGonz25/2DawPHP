<?php
 
    $base=2;
    $exponente=-3;

    echo  $base**$exponente;



     /*

     // otra forma de hacer el ejercicio con formulario 

       - Formulario html{

                        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <form action="saludar.php" method="get">
                    <p><label for="base">base:</label></p>
                    <input type="number" name="base" id="base">
                    <p><label for="exponente">exponente:</label></p>
                    <input type="number" name="exponente" id="exponente">
                    <p><input type="submit" value="Enviar"></p>

                </form>
            </body>
            </html>

        }


       - Archivo php

        if ((isset($_GET["base"]) && (isset($_GET["exp"]))&& !empty($_GET["base"])){
           
            $base=$_GET["base"];
            $exponente=$_GET["exponente"];

            if ($exponente>0 || exponente<0){

            }else
            echo 1

        }else{
            echo "no existen datos";
        }

    */ 




        //-Apuntes 
    /*    
     - no podria meter esto en el html ya que siempre que halla al de php lo voy a tener que usar con el servidor 
     
     - el empty sirve para saber si elos datos que me han enviado estan vacios o no 
     ejemplo: pido un numero del 1 al 10 y el cliente no me envia ningun numero "lo deja en vacio" el isset me dice que esta vacio.  
     
     - el isset me sirve para saber si una variable existe dentro del php 
     ejemplo : me piden un formulario y tengo sexo solo y el cliente me sexo y edad el isset me dira que que la variable edad no existe en mi formulario 
     */   
?>