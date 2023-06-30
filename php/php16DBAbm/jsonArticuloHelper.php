<?php

    include ("../php15DBListaOrdenadaFiltra/datosConexionBase.php");

    $codArt = $_POST['codArt'];
    

    $sql = "select * from articulos where codArt=:codArt;";

    $stmt = $dbh->prepare($sql);
    
    $stmt->bindParam(':codArt', $codArt);
    
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $articulos = [];

    While($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
        $objArticulo = new stdClass();
        $objArticulo->id=$fila['id'];
        $objArticulo->codArt=$fila['codArt'];
        $objArticulo->marca=$fila['marca'];
        $objArticulo->descrip=$fila['descrip'];
        $objArticulo->fechaIngreso=$fila['fechaIngreso'];
        $objArticulo->stock=$fila['stock'];
        $objArticulo->precio=$fila['precio'];
        
        array_push($articulos, $objArticulo);
    }

    $objArticulos = new stdClass();
    $objArticulos->articulos=$articulos;      

    $salidaJson = json_encode($objArticulos);
    $dbh = null;

    sleep(2);

    echo $salidaJson;
    

?>