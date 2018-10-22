<?php require_once("cabecalho.php"); 		
require_once("conecta.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Página do Usuário</title>
</head>
<body>
	<div class="container">
<fieldset class="col-md-8"></legend>

	<?php
	    $cpf=$_SESSION["cpf"];
		$query= "SELECT * FROM usuario WHERE cpf='$cpf'";
		$resultado=mysqli_query($conexao,$query);
		$linhas= mysqli_num_rows ($resultado);
		for($i=0;$i<$linhas;$i++){
		$registro=mysqli_fetch_array($resultado);
	?>  
	<br>
	    <img src="imagens_perfil/<?php echo $registro['foto_perfil'];?>" style=" width: 200px; height: 200px; border-radius: 200px;"/> <h4>Olá <?= $registro['nome']?></h4>
		<h5>Email:<?= $registro['email'] ?></h5>
		<h5>Celular:<?= $registro['celular'] ?></h5>
		<h5>Endereço: <?= $registro['rua'] ?> <?= $registro['num'] ?> - <?= $registro['bairro'] ?></h5>

		
	     <form action="altera-usuario.php" method="post">
				<input type="hidden" name="cpf" value="<?=$registro['cpf']?>">
				<button type="submit" class="btn btn-primary" value="Alterar" name="alterar" id="alterar" style="background-color: green;">
  <span class="glyphicon glyphicon-pencil"></span>Alterar dados</button></form><br>

        <form action="remove-usuario.php" method="post">
				<input type="hidden" name="cpf" value="<?=$registro['cpf']?>">
				<button type="submit" class="btn btn-primary" value="Alterar" name="alterar" id="alterar" style="background-color: #8B0000;">
  <span class="glyphicon glyphicon-trash"></span>Deletar conta</button></form>



<?php
 }
?>
</fieldset>
</div>
</body>
