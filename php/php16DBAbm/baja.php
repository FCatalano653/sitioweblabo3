<?php

    include ("../php15DBListaOrdenadaFiltra/datosConexionBase.php");
            
    $codArt = $_POST['codArt'];    

    $respuesta_estado=$respuesta_estado . "\nBaja articulo\n";
    $respuesta_estado=$respuesta_estado . "\ncodArt:" . $codArt;

    $sql = "DELETE FROM articulos WHERE codArt=:codArt;";

    function WriteLog(){
        $puntero = fopen("./errores.log", "a");
        fwrite($puntero, $respuesta_estado);
        $fecha = date("Y-m-d");
        fwrite($puntero, date("Y-m-d H-i"). "");
        fwrite($puntero, "\n");
        fclose($puntero);
    }

    try {
        $stmt = $dbh->prepare($sql);
        $respuesta_estado = $respuesta_estado . "\nPreparacion exitosa";
    } catch(PDOException $e){
        $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
        WriteLog();
    }
    try {
        $stmt->bindParam(':codArt', $codArt);        
        $respuesta_estado = $respuesta_estado . "\nBinding exitosa";
    } catch(PDOException $e){
        $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
        WriteLog();
    }
    try {
        
        $stmt->execute();
        $respuesta_estado = $respuesta_estado . "\nEjecucion exitosa";
    } catch(PDOException $e){
        $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
        WriteLog();
    }

    $dbh = null;
    echo $respuesta_estado;

?>