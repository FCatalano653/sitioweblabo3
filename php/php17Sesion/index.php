<?php

    session_start();    
    //$varSesion = $_SESSION['idDeSesion'];
    if(!isset($_SESSION['idDeSesion'])){
        header('Location:./ingresoAlSistema.php');
        exit();
    }
    header('Location:./formularioDeLogin.html');

?>

