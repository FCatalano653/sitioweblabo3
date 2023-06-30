<?php

    include ("../php15DBListaOrdenadaFiltra/datosConexionBase.php");
        
    $codArt = $_POST['codArt'];
    $descrip = $_POST['descrip'];
    $marca = $_POST['marca'];
    $fechaIngreso = $_POST['fechaIngreso'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];

    $respuesta_estado=$respuesta_estado . "\nParte Modificacion simple de datos <br/>\n";

    $sql = "UPDATE articulos set codArt=:codart, descrip=:descrip, marca=:marca, fechaIngreso=:fechaIngreso,
    stock=:stock, preccio=:precio WHERE codArt=:codArt;";

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
        $stmt->bindParam(':descrip', $descrip);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':fechaIngreso', $fechaIngreso);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':precio', $precio);
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