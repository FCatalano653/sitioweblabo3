<?php

    include ("../php15DBListaOrdenadaFiltra/datosConexionBase.php");

    $codArt = $_POST['codArt'];
    

    $sql = "select documentoPdf from articulos where codArt=:codArt;";

    $stmt = $dbh->prepare($sql);
    
    $stmt->bindParam(':codArt', $codArt);
    
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $objArticulo = new stdClass();

    While($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        
        $objArticulo->documentoPdf=base64_encode($fila['documentoPdf']);
        
    }

    

    $salidaJson = json_encode($objArticulo, JSON_INVALID_UTF8_SUBSTITUTE);
    $dbh = null;

    sleep(2);

    echo $salidaJson;
    

?>