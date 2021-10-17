<?php
include '../model/conexao.php';
include '../controller/autenticacao.php';





if(isset($_FILES['avatar']))
{
   $ext = strtolower(substr($_FILES['avatar']['name'],-4)); //Pegando extensão do arquivo
   $new_name = $_SESSION['login'].$ext; //Definindo um novo nome para o arquivo 

   //--------------------------------------- Salvando nome do avatar no banco
   $SalvarAvatar = new ConnectQuery;
   $SalvarAvatar->setQuery("UPDATE usuario SET avatar = '".$new_name."' WHERE idUser LIKE '".$_SESSION['iduser']."'");
   $SalvarAvatar->getQuery();
   //---------------------------------------

   $dir = '../view/avatares/'; //Diretório para uploads 
   move_uploaded_file($_FILES['avatar']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
   $msg = "Avatar atualizado com sucesso!";
}
?>

<script>
alert('<?php echo $msg; ?>');

location.href="../view/menu.php"; //redirecionamento em JS


</script> 
   


