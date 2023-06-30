<?php

    include ("./datosConexionBase.php");

    $orden = $_POST['orden'];
    $f_articulos_id = $_POST['f_articulos_id'];
    $f_articulos_codArt = $_POST['f_articulos_codArt'];
    $f_articulos_descrip = $_POST['f_articulos_descrip'];
    $f_articulos_marca = $_POST['f_articulos_marca'];
    $f_articulos_fechaIngreso = $_POST['f_articulos_fechaIngreso'];
    $f_articulos_stock = $_POST['f_articulos_stock'];
    $f_articulos_precio = $_POST['f_articulos_precio'];

    $sql = "select * from articulos where ";

    $sql = $sql . "id LIKE CONCAT('%',:id,'%') and ";
    $sql = $sql . "codArt LIKE CONCAT('%',:codArt,'%') and ";
    $sql = $sql . "descrip LIKE CONCAT('%',:descrip,'%') and ";
    $sql = $sql . "marca LIKE CONCAT('%',:marca,'%') and ";
    $sql = $sql . "fechaIngreso LIKE CONCAT('%',:fechaIngreso,'%') and ";
    $sql = $sql . "stock LIKE CONCAT('%',:stock,'%') and ";
    $sql = $sql . "precio LIKE CONCAT('%',:precio,'%')";
    $sql = $sql . " ORDER BY $orden";

    

    $stmt = $dbh->prepare($sql);

    $stmt->bindParam(':id', $f_articulos_id);
    $stmt->bindParam(':codArt', $f_articulos_codArt);
    $stmt->bindParam(':descrip', $f_articulos_descrip);
    $stmt->bindParam(':marca', $f_articulos_marca);
    $stmt->bindParam(':fechaIngreso', $f_articulos_fechaIngreso);
    $stmt->bindParam(':stock', $f_articulos_stock);
    $stmt->bindParam(':precio', $f_articulos_precio);

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
    $objArticulos->cantReg=count($articulos);    

    $salidaJson = json_encode($objArticulos);
    $dbh = null;

    sleep(2);


    echo $salidaJson;
    

?>