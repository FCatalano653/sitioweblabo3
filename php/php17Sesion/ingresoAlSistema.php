<?php

    include ("./datosConexionBase.php");
    

    autenticacion(){
        $ = $_POST['codArt'];
    }
    
    if(!isset($_SESSION['identificativo'])){
        if(!autenticacion($log, $cl)){
            header('Location:./formularioDeLogin.html');
            exit();
        }
    
        session_start();
    
        $_SESSION['ejer17idsesion'] = session_create_id();
        $_SESSION['login'] = $log;
        $_SESSION['cl'] = $cl;
    
        header('Location:./app_modulo1');    
    }
    header('Location:./app_modulo1');

?>
