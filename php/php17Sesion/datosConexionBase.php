<?php

   

    $dbname = 'fc653labo3fr_proyectolabo3';
    $dbhost = 'localhost';
    $dbuser = 'fc653labo3fr_1';
    $dbpass = 'PrU3b4';

    try{
        $dsn = "mysql:host=$dbhost;dbname=$dbname";
        $dbh = new PDO($dsn, $dbuser, $dbpass);
        $respuesta_estado = $respuesta_estado . "\nconexion exitosa";        

               
    } catch(PDOException $e){
        $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
        //Generacion Archivo .log con error de conexion para depurar
        $puntero = fopen("./errores.log", "a");
        fwrite($puntero, $respuesta_estado);
        $fecha = date("Y-m-d");
        fwrite($puntero, date("Y-m-d H-i"). "");
        fwrite($puntero, "\n");
        fclose($puntero);
    }

?>