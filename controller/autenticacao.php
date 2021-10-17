<?php 

session_start(); 


if(!isset($_SESSION["iduser"])){

    session_destroy();
    $msg = "Acesso negado";
    header("location:../index.php?msg=".$msg); //redirecionamento em PHP

}

?>