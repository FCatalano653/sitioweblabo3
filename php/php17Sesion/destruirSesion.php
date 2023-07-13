<?php

    session_start();    
    //$varSesion = $_SESSION['idDeSesion'];
    if(!isset($_SESSION['idDeSesion'])){
        header('Location:./formularioDeLogin.html');
        exit();
    }

    session_destroy();
    header('Location:./formularioDeLogin.html');

?>

