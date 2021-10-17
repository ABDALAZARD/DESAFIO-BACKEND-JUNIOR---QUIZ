<?php


include '../model/conexao.php';

 
$login = $_POST['login'];
$senha = $_POST['senha'];
$confirma = $_POST['confirma'];

if($senha == $confirma && $login != ""){

$conn = new ConnectQuery;
$conn->setQuery("INSERT INTO usuario VALUES(NULL,'".$login."','".MD5($senha)."', '0', '0')");


if($conn->getQuery()){

    $conn2 = new ConnectQuery;
    $conn2->setQuery("INSERT INTO recompensa VALUES(NULL,'!ok','!ok', '!ok')");
    $conn2->getQuery();

    $msg ="<b style='color:green';>Cadastrado com sucesso!</b>";

    header("location:../cadastro_novo.php?msg=".$msg);

}else{
    $msg ="<b style='color:red';>Erro ao cadastrar! Tente novamente</b>";

    header("location:../cadastro_novo.php?msg=".$msg);
}
}
else{
    $msg ="<b style='color:red';>As senhas não são iguais, tente novamente</b>";


    header("location:../cadastro_novo.php?msg=".$msg);
}

?>