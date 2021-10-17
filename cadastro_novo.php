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
    <link rel="stylesheet" href="materialize/css/materialize.min.css">

</head>

<body style="background-color:lightsteelblue;">
    <br><br>
    <div class="centro">

        <div class="container">

            <h4>Cadastre-se</h4>

            <form action="controller/cadastro.php" METHOD="POST">

                <div class="row">
                    <div class="col s5">
                        <input type="text" name="login" placeholder="Insira seu login" required>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <input type="password" name="senha" placeholder="Insira sua senha" required>
                        <br>
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s5">
                        <input type="password" name="confirma" placeholder="Insira sua senha novamente" required>
                        <br>
                    </div>
                </div>
                <br>
                <h5 class="left"><?php 
			
                                if(isset($_GET['msg'])){
                                echo $_GET['msg'];
                                }
                            ?>
                        </h5>
                <input type="submit" value="Cadastrar" class="btn black right">


            </form>
        </div>

        <br><br>


        <br><br><br>


    </div>
    </div>

</body>

</html>