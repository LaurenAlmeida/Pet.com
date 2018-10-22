<?php require_once("cabecalho.php"); 		
 require_once("conecta.php");

 
	$id_adote=$_POST['id'];

	$query="delete from adote where id_adote = '$id_adote'";
	$resultado=mysqli_query($conexao,$query);
	if($resultado){
		echo "<script>location.href='lista-td.php';</script>";
	}
	else{
		echo "Falha ao apagar registro!";
	}
?>

 