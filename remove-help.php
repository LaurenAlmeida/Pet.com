<?php require_once("cabecalho.php"); 		
 require_once("conecta.php");

 
	$id=$_POST['id'];

	$query="delete from help where id = '$id'";
	$resultado=mysqli_query($conexao,$query);
	if($resultado){
		echo "<script>location.href='lista-td.php';</script>";
	}
	else{
		echo "Falha ao apagar registro!";
	}
?>

 