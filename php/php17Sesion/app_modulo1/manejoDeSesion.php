<?php

    session_start();
    if(!isset($_SESSION['idDeSesion'])){
        header('location:../index.php');
        exit();
    }

?>