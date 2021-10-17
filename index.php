<?php


if(isset($_SESSION['iduser'])){
	header("location:view/menu.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>QUIZ</title>
    <style>
    .centro {
		
			padding: 10px 10px 10px 10px;
			border: 2px solid white; width:30%;
			text-align: center;
			background-color:honeydew ;
			margin: auto;
			margin-top: 20px;
		}
		
    
	
    </style>
			<link rel="stylesheet" href="materialize/css/materialize.min.css">

</head>

<body style="background-color:lightsteelblue;">
<br><br>
<div class="center">
    <div class="centro">

        <h1>QUIZ</h1>
        <h3>Acesso</h3>
	<div class="container">
        <form action="controller/verificar-login.php" METHOD="POST">
            <label>LOGIN</label>
            <input type="text" name="login"  required>
			<br><br>
            <label>SENHA</label>
            <input type="password" name="senha"  required>
			<br>
				<a href="cadastro_novo.php" class="right">Novo usuário? Cadastre-se</a>
			<br>
			<h5 style="color:red"><?php 
			
				if(isset($_GET['msg'])){
				echo $_GET['msg'];
				}
			 ?></h5><br><br>
			<input type="submit" value="Entrar" class="btn red">
        </form>
	</div>
	</div>

	</div>
</body>

</html>