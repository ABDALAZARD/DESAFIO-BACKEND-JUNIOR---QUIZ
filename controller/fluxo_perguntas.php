<?php
include '../model/conexao.php';
//-----------------------------------ENUNCIADO ------------------------------------------------------------

//Objetivo: Resgatar as perguntas
$ConnectQuery = new ConnectQueryEnunciado; // crio um novo objeto para uma nova query

$totalEnunc = mysqli_fetch_array($ConnectQuery->getQuery());

//Enunciado concluido aqui




//---------------------------------FIM ENUNCIADO -----------------------------------------------------------


?>