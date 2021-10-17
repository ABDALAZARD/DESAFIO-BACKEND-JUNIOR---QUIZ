<?php

include '../model/conexao.php';

session_start();
 
$login = $_POST['login'];
$senha = MD5($_POST['senha']);

$conn = new ConnectQuery;
$conn->setQuery("SELECT * FROM usuario WHERE usuario LIKE '".$login."' AND senha LIKE '".$senha."'");


if($conn->getQuery()){

    $result = mysqli_fetch_array($conn->getQuery());

    $_SESSION['iduser'] = $result['idUser'];
    $_SESSION['login'] = $result['usuario'];
    $_SESSION['pontos'] = $result['pontos'];
    $_SESSION['avatar'] = $result['avatar'];
    


    

    header("location:../view/menu.php");

}else{
    header("location:../index.php?");
}


?>