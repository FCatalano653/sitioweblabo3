<?php

    include ("./datosConexionBase.php");

    if(!isset($_SESSION['idDeSesion'])){

        if(!isset($_POST['var1']) || !isset($_POST['var2'])){
            header('Location:./formularioDeLogin.html');
            exit();
        }

        $usuario = $_POST['var1'];
        $clave = $_POST['var2'];
        $auntentica = false;               

        $sql = "select * from usuarios where usuario=:usuario and clave=:clave;";

        $stmt = $dbh->prepare($sql);
        
        $stmt->bindParam(':usuario', sha1($usuario));
        $stmt->bindParam(':clave', sha1($clave));
        
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        $stmt->execute();

        $objUser = new stdClass();

        if($stmt->rowCount()){
            $auntentica = true;
            
            While($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
                $objUser->id = $fila['id'];
                $objUser->cont = $fila['contador'];                                                                                                  
            }
            
            $objUser->cont++;

            $sql = "UPDATE usuarios set contador=:cont WHERE id=:id;";
    
            $stmt = $dbh->prepare($sql);
        
            $stmt->bindParam(':cont', $objUser->cont);
            $stmt->bindParam(':id', $objUser->id);
        
            $stmt->execute();
            
        }
        
        
        $dbh = null;
        
        

        if(!$auntentica){
            header('Location:./formularioDeLogin.html');
            exit();
        }

        session_start();
        $_SESSION['idDeSesion'] = session_create_id();
        $_SESSION['login'] = $usuario;
        $_SESSION['cl'] = $clave;
        $_SESSION['cont'] = $objUser->cont;

    }
    
    echo "<h1> Acceso concedido </h1>";
    echo "<h2> Sus parametros de sesion son: </h2>";

    echo "<h3> Id de sesion: ".$_SESSION['idDeSesion']."</h3>";
    echo "<h3> User: ".$_SESSION['login']."</h3>";
    echo "<h3> Contador: ".$_SESSION['cont']."</h3>";
    
    echo "<p> <button onClick=\"location.href='./app_modulo1'\"> Ingrese a la app </button> </p>";
    echo "<p> <button onClick=\"location.href='./destruirSesion.php'\"> Cerrar la sesion actual </button> </p>";

?>


