<?php
include '../controller/autenticacao.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>QUIZ</title>
    <style>
    .centro {

        padding: 10px 10px 10px 10px;
        border: 2px solid white;
        width: 30%;
        text-align: center;
        background-color: honeydew;
        margin: auto;
        margin-top: 20px;
    }
    </style>
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">

</head>

<body style="background-color:lightsteelblue;">
    <br><br>
    <div class="centro">

        <div class="container">

            <h4>Cadastro de Questionário</h4>
            <br><br>

            <form action="../controller/cadastro_quest_banco.php" METHOD="POST">

                <div class="row">
                    <div class="col s10">
                        <input type="text" name="enunc" placeholder="ENUNCIADO" required>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col s10">
                        <input type="text" name="alternativa0" placeholder="Alternativa 0" required>
                        <br>

                    </div>
                </div>
                <div class="row">
                    <div class="col s10">
                        <input type="text" name="alternativa1" placeholder="Alternativa 1" required>
                        <br>

                    </div>
                </div>

                <div class="row">
                    <div class="col s10">
                        <input type="text" name="alternativa2" placeholder="Alternativa 2" required>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col s10">
                        <input type="text" name="alternativa3" placeholder="Alternativa 3" required>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col s10">
                        <input type="text" name="alternativa4" placeholder="Alternativa 4" required>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col s10">
                        <input type="text" name="resposta" placeholder="Resposta" required>
                        <br>
                    </div>
                </div>
                <br>
                <br>
                <h5 class="left"><?php 
			
                                if(isset($_GET['msg'])){
                                echo $_GET['msg'];
                                }
                            ?>
                </h5>
                <br>
                <div class="row">
                <div class="col s5">
                        <a href="menu.php"  class="btn red right">Menu</a>
                    </div>
                    <div class="col s5">
                        <input type="submit" value="Cadastrar" class="btn green right">
                    </div>
                </div>

            </form>

            <br>
        </div>

        <br><br>




    </div>
    <br>
    </div>

</body>

</html>