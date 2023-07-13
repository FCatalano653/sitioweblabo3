<?php

    session_start();        
    if(!isset($_SESSION['idDeSesion'])){
        header('Location:../formularioDeLogin.html');
        exit();
    }

    include ("./datosConexionBase.php");

    $sql = "select * from marcas order by id";

    $stmt = $dbh->prepare($sql);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $marcas = [];

    While($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
        $objMarca = new stdClass();
        $objMarca->id=$fila['id'];
        $objMarca->marca=$fila['marca'];
        
        array_push($marcas, $objMarca);
    }

    $objMarcas = new stdClass();
    $objMarcas->marcas=$marcas;
    $objMarcas->cantReg=count($marcas);


    $salidaJson = json_encode($objMarcas);
    $dbh = null;

    sleep(2);


    echo $salidaJson;

?>