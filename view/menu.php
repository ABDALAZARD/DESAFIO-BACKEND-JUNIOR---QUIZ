<?php
    
    include_once '../controller/autenticacao.php';
    include_once '../model/conexao.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>QUIZ</title>
    <style>
    .menu {
        text-align: center;
        margin: auto;
        margin-top: 20px;

    }
    .menu1 {
        text-align: center;
        margin: auto;
        margin-left: 200px;

    }

    #avatar {
        margin: 10px 10px 10px 10px;
        width: 120px;
        height: 140px;
    }
    </style>
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">

</head>

<body>
    <div class="container">
        <div class="menu">
            <img id="avatar" src="<?php echo "avatares/".$_SESSION['avatar']; ?>">
            <form action="../controller/gravar_avatar.php" METHOD="POST" enctype="multipart/form-data">
                <input type="file" name="avatar" accept=".png, .jpeg, .jpg"><br>
                <label>.png, .jpeg, .jpg</label>
                <input type="submit" value="Enviar">
                <h4>Pontuação</h4>
                <?php
//Trazendo os dados de pontuação atualizados
    $conn1 = new ConnectQuery;
    $conn1->setQuery("SELECT * FROM usuario WHERE idUser LIKE '".$_SESSION['iduser']."'");


if($conn1->getQuery()){

    $result = mysqli_fetch_array($conn1->getQuery());


                $pontos = $result['pontos'];
                $qtd = $result['qtdPerg'];

                $M = +$qtd*+$pontos;
                $porcentagem = +$M/10;


                echo $pontos." pontos | ";
                echo "Qtd. questões: ".$qtd." | ";
                echo "<b style='color:green';>".$porcentagem."% de acerto</b>";

            }
        ?>


                <br><br>

                <a href="perguntas.php" class="btn">IR PARA O QUIZ</a>
                <a href="cadastro_quest.php" class="btn">Cadastrar Questionário</a>
                <a href="../sair.php" class="btn red">SAIR</a>
                <br><br><br>
                <p>Ganhe joinhas se:<br><br>
                    * 20 perguntas, com +84% de acertos;<br>
                    * 30 perguntas, com +75% de acertos;<br>
                    * 50 perguntas, com +45% de acertos;
                </p>
                
                <div class="menu1">

                <?php 
                
                //sistema de recompensas na tela
                
                if(isset($_SESSION['iduser'])){
                    $conn2 = new ConnectQuery;
                    $conn3 = new ConnectQuery;
                    $conn4 = new ConnectQuery;

                        //trazer dados da tabela recompensa. Caso o dado esteja armazenado como ''ok'', ele 
                        //mostrará o premio ''joinha'' no menu. Caso esteja armazenado como ''!ok'', significa
                        //que ele NÃO atingiu a métrica da pontuação necessária.

                    if($porcentagem >= 84 && $qtd = 20){
                        $meta1 = 'ok';
                        $conn1->setQuery("UPDATE recompensa SET meta1 = '".$meta1."' WHERE iduser LIKE '".$_SESSION['iduser']."'");
                        $conn1->getQuery();

?>                        <div class="row"><div class="col s3"><img src="img/trofeu1.png" id='avatar'><br><label>1ª joinha obtida</label></div> <?php

                        if($porcentagem >= 75 && $qtd = 30){
                            $meta2 = 'ok';
                            $conn2->setQuery("UPDATE recompensa SET meta2 = '".$meta2."' WHERE iduser LIKE '".$_SESSION['iduser']."'");
                            $conn2->getQuery();

?>                           <div class="col s3"><img src="img/trofeu2.png" id='avatar'><br><label>2ª joinha obtida</label></div> <?php

                            if($porcentagem >= 45 && $qtd = 50){
                                $meta3 = 'ok';
                                $conn3->setQuery("UPDATE recompensa SET meta3 = '".$meta3."' WHERE iduser LIKE '".$_SESSION['iduser']."'");
                                $conn3->getQuery();

?>                              <div class="col s3"><img src="img/trofeu3.png" id='avatar'><br><label>3ª joinha obtida</label></div></div> <?php

                            }else{
                                $meta3= "!ok";
                                $conn3->setQuery("UPDATE recompensa SET meta3 = '".$meta3."' WHERE iduser LIKE '".$_SESSION['iduser']."'");
                            $conn3->getQuery();
                            ?><div class="row"><div class="col s3"><img src="img/0trofeu.png" id='avatar'><br><label>1ª joinha obtida</label></div> <?php

                            }
                        }else{
                            $meta2= "!ok";
                            $conn2->setQuery("UPDATE recompensa SET meta2 = '".$meta2."' WHERE iduser LIKE '".$_SESSION['iduser']."'");
                            $conn2->getQuery();
                            ?><div class="row"><div class="col s3"><img src="img/0trofeu.png" id='avatar'><br><label>1ª joinha obtida</label></div> <?php
                            }
                        }else{
                        $meta1= "!ok";
                        $conn1->setQuery("UPDATE recompensa SET meta1 = '".$meta1."' WHERE iduser LIKE '".$_SESSION['iduser']."'");
                            $conn1->getQuery();
                            
                            ?><div class="row"><div class="col s3"><img src="img/0trofeu.png" id='avatar'><br><label>1ª joinha obtida</label></div> <?php

                    }
                    
                            //fim recompensas
                ?>
                   



                </div>
                <?php } ?>

        </div>
    </div>

</body>

</html>