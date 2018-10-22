<?php require_once("cabecalho.php"); 		
require_once("conecta.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
<fieldset class="col-md-6"><legend>Animais para adoção</legend>
<table class="table table-striped table-bordered">
	<tr>
        <th>Imagem</th>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Idade</th>
        <th>Alterar</th>
        <th>Adotar</th>
        <th>Deletar</th>
    </tr>
	<?php
		$query= "SELECT * FROM adote";
		$resultado=mysqli_query($conexao,$query);
		$linhas= mysqli_num_rows ($resultado);
		for($i=0;$i<$linhas;$i++){
		$registro=mysqli_fetch_array($resultado);
	?>
	
    <tr>
		<td><img src="imagens_adota/<?php echo $registro['foto'];?>" style=" width: 100px"/></td>
		<td><?= $registro['nm'] ?></td>
		<td><?= $registro['sexo'] ?></td>
		<td><?= $registro['idade'] ?></td>
		<td><form action="altera-adote.php" method="post">
			<input type="hidden" name="id" value="<?=$registro['id_adote']?>">
			<button class="btn btn-primary" type="submit" value="Alterar" name="alterar"><span class="glyphicon glyphicon-pencil"></span></button></form></td>
		<td>
			<form action="aux-adote.php" method="post">
				<input type="hidden" name="cpf" value="<?=$registro['cpf']?>">
				<input type="hidden" name="id" value="<?=$registro['id_adote']?>">
				<button type="submit" class="btn btn-primary" value="Alterar" name="ajudar" id="ajudar" style="background-color: purple;">
  <span class="glyphicon glyphicon-heart"></span>
</button></form></td>
		</td>
		<td>
			<form action="remove-adote.php" method="post">
				<input type="hidden" name="id" value="<?=$registro['id_adote']?>">
						<button type="submit" class="btn btn-danger" value="Remover" name="alterar" id="alterar">
  <span class="glyphicon glyphicon-trash"></span>
</button></form></td>
		</td>
	</tr>
	<?php
		} 
	?>	
</table>	
</fieldset>
</div>
</body>
