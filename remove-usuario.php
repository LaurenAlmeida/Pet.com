<?php require_once("cabecalho.php"); 		
 require_once("conecta.php");

 
	$cpf=$_POST['cpf'];

	$query="delete from usuario where cpf = '$cpf'";
	$resultado=mysqli_query($conexao,$query);
	if($resultado){
		echo "<script>location.href='index.php';</script>";
		
	}
	else{
		echo "Falha ao deletar conta!";
	}
?>

 