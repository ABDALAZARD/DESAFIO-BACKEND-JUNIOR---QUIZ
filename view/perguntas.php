<?php
    include_once '../controller/fluxo_perguntas.php';
    include_once '../controller/fluxo_alternativas.php';
    include_once '../controller/autenticacao.php';
    require '../controller/contador.php';
    
    
    $contador->getQuery();
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>QUIZ</title>
    <style>
    .centro {
        text-align: center;
        margin: auto;
        margin-top: 20px;

    }

    .form-container span.input-label {
        display: "inline-block";
        width: 400px;
        /* width a ajustar */
        text-align: "left";
        padding-left: 10px;
        margin: auto;


    }
    </style>
			<link rel="stylesheet" href="../materialize/css/materialize.min.css">

</head>

<body>
    <div class="centro">
        <a href="menu.php" class="btn red">Ir para o menu</a>
   
        <br><br><br><br>
        <h6> Questão nº <?php echo $totalEnunc['idPerg']; ?> </h6>
        <h4><?php echo $totalEnunc['Enunciado']; ?></h4>
       

    <div class="form-container">
        <form action="avaliar-pergunta.php" METHOD="POST">
            <!-- resposta0 -->
           <br>
            <p><label><input type="radio" name="resposta" value="0" required><span class="input-label"><?php echo $totalAlt[1];?> </span></label></p>
            <br><br>

            <p><label><input type="radio" name="resposta" value="1" required><span class="input-label"><?php echo $totalAlt[2];?> </span></label></p>
            <br><br>

            <p><label><input type="radio" name="resposta" value="2" required><span class="input-label"><?php echo $totalAlt[3];?> </span></label></p>
            <br><br>
            <p><label><input type="radio" name="resposta" value="3" required><span class="input-label" ><?php echo $totalAlt[4];?> </span></label></p>
            <br><br>
            <p><label><input type="radio" name="resposta" value="4" required><span class="input-label"><?php echo $totalAlt[5];?> </span></label></p>
            <br><br>
             
            <input type="text" name="idpergunta" value="<?php echo $totalEnunc['idPerg'];?>" hidden>
            <input type="text" name="respostacerta" value="<?php echo $totalAlt[6];?>" hidden>


            <br><br>
            <br><br>
            <input type="submit" value="Próximo" class="btn green">
        </form>
    </div>
        <br><br>
        <a href="../controller/pular_func.php" class="btn grey">pular</a>
        <br><br>
    
    </div>
</body>

</html>