<?php

include_once '../model/conexao.php';
include_once '../controller/autenticacao.php';

//Contador de visitas em perguntas. Calcula as acertadas + puladas.

$id = $_SESSION['iduser'];


$conn = new ConnectQuery;
$conn->setQuery("SELECT * FROM usuario WHERE idUser LIKE '".$id."'");


if($conn->getQuery()){

    $result = mysqli_fetch_array($conn->getQuery());

    $qtd = $result['qtdPerg'];
 
}

//-------------

$contador = new ConnectQuery;

$NovoPonto = $qtd + 1;

$contador->setQuery("UPDATE usuario SET qtdPerg = '".$NovoPonto."' WHERE idUser = '".$_SESSION['iduser']."'");

?>