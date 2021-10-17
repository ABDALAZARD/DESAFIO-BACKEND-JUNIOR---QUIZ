<?php

include '../model/conexao.php';
include_once '../controller/autenticacao.php';

$resposta_certa = $_POST['respostacerta'];
$resposta_usuario = $_POST['resposta'];
$idperg = $_POST['idpergunta'];



//Trazendo as alternativas para comparação
$buscar_pergunta_banco = new ConnectQuery;

$buscar_pergunta_banco->setQuery("SELECT alternativa0, alternativa1, alternativa2, alternativa3, alternativa4
   FROM resp WHERE idPerg LIKE '".$idperg."'");
$result = $buscar_pergunta_banco->getQuery();
$row = mysqli_fetch_array($result);



//comparação de respostas
if($resposta_usuario == $resposta_certa){
//---
    $conn = new ConnectQuery;
    $conn->setQuery("SELECT * FROM usuario WHERE idUser = '".$_SESSION['iduser']."'");





if($conn->getQuery()){ //Se a query for executada com sucesso, vai trazer os dados de pontuação para o session

    $result = mysqli_fetch_array($conn->getQuery());

    
    
}









//-------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------







//Caso o usuário acerte a alternativa, vai somar os pontos do BD + os pontos da pergunta, e automaticamente vai inserir
//a nova pontuação no banco
$pontuacao = $_SESSION['pontos'] + 10;
$sysponto = new ConnectQuery;
$sysponto->setQuery("UPDATE usuario SET pontos = '".$pontuacao."' WHERE idUser = '".$_SESSION['iduser']."'");



    if($a = $sysponto->getQuery()){
        $msg_resultado = " ACERTOU! Você Ganhou +10 ponto =D<br><img src='img/smile_emoji_rag.gif';>";
        //Após a resposta ser analisada, redicionara o usuário para o QUIZ novamente depois de 5 segundos
        header("refresh: 5;../view/perguntas.php");
}

    }

else{
            //Após a resposta ser analisada, redicionara o usuário para o QUIZ novamente depois de 5 segundos

    $msg_resultado = "Resposta Errada! A resposta correta era ".$row[$resposta_certa]."<br><img src='img/mad_emoji_rag.gif';><br>Tente mais uma vez.";
    header("refresh: 5;../view/perguntas.php");


}

?>