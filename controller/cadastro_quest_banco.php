<?php

include '../model/conexao.php';
include 'autenticacao.php';

$enunc = $_POST["enunc"];
    $alt0  = $_POST["alternativa0"];
    $alt1  = $_POST["alternativa1"];
    $alt2  = $_POST["alternativa2"];
    $alt3  = $_POST["alternativa3"];
    $alt4  = $_POST["alternativa4"];
$resp = $_POST["resposta"];

$conn = new ConnectQuery;
$conn1 = new ConnectQuery;
$conn->setQuery("INSERT INTO perg VALUES(NULL, '".$enunc."', '".$resp."')");

if($conn->getQuery()){
    $msg ="<b style='color:green';>Questão cadastrada com sucesso!</b>";

    $conn1->setQuery("INSERT INTO resp VALUES(NULL, '".$alt0."','".$alt1."','".$alt2."','".$alt3."','".$alt4."', '".$resp."', '".$_SESSION['idperg']."')");
    if($conn1->getQuery()){
        $randQuery = new ConnectQueryEnunciado;
        $randQuery->setRandomQuery($row['idPerg']);//Salvando o valor do ultimo idperg
        $randQuery->getQuery();

        $msg_confirm = $msg."<br>"."<b style='color:green';>alternativas cadastradas com sucesso!</b>";

        header("location:../view/cadastro_quest.php?msg=".$msg_confirm);
    }

}else{
    $msg ="<b style='color:red';>Erro ao cadastrar! Tente novamente</b>";

    header("location:../view/cadastro_quest.php?msg=".$msg_confirm);
}



?>