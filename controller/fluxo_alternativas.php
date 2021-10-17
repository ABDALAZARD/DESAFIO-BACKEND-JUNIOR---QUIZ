<?php
include 'autenticacao.php';
include_once '../model/conexao.php';
include_once 'fluxo_perguntas.php';

//Trazendo alternativas

$ConnectQuery1 = new ConnectQueryAlternativas;



$ConnectQuery1->setIdAlt($totalEnunc['idPerg']);
$SqlIdPerg = $ConnectQuery1->getQuery();

$rowsAlt = mysqli_num_rows($SqlIdPerg);
$totalAlt = mysqli_fetch_array($SqlIdPerg);



?>