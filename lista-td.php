<?php require_once("cabecalho.php"); 
require_once ("conecta.php");	
?>
<body>
<div class="container">
<fieldset class="col-md-6"><legend>Animais que precisam de ajuda</legend>
<table class="table table-striped table-bordered">

	<tr>
        <th>Imagem</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Ajuda</th>
        <th>Alterar</th>
        <th>Deletar</th>
        <th>Ajudar</th>
    </tr>

	<?php
		$query= "SELECT * FROM help";
		$resultado=mysqli_query($conexao,$query);
		$linhas= mysqli_num_rows ($resultado);
		for($i=0;$i<$linhas;$i++){
		$registro=mysqli_fetch_array($resultado);


	?>
	<tr>
		<td style="width: 100px; height: 100px;"><img src="imagens_help/<?php echo $registro['foto_help'];?>" style=" width: 100px"/></td>
		<td><?= $registro['nm_pet'] ?></td>
	<!-- 	<td><?= $registro/*['nm_responsavel']*/ ?></td> -->
		<!--<td><?= $registro/*['situacao'] */?></td>-->
		<td><?= substr($registro['descricao'], 0, 40) ?></td>
		<td><?= $registro['ajuda']?></td>
		<td style="text-align:center;"><form action="altera-pet.php" method="post">
			<input type="hidden" name="id" value="<?=$registro['id']?>">
			<button type="submit" class="btn btn-primary" value="Alterar" name="alterar" id="alterar">
  <span class="glyphicon glyphicon-pencil"></span>
</button></form></td>
		<td style="text-align:center;">
			<form action="remove-help.php" method="post">
				<input type="hidden" name="id" value="<?=$registro['id']?>">
				<button type="submit" class="btn btn-danger" value="Alterar" name="alterar" id="alterar">
  <span class="glyphicon glyphicon-trash"></span>
</button></form></td>
<td style="text-align:center;">
        <form action="ajudar.php" method="post">
				<input type="hidden" name="id" value="<?=$registro['id']?>">
				<button type="submit" class="btn btn-primary" value="Alterar" name="alterar" id="ajudar" style="background-color: green;">
  <span class="glyphicon glyphicon-star"></span>
</button></form></td>
	</tr>
	<?php
		} 
	?>	
</table>		
</fieldset>
</div>
<br>
<br>
<br>
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
		<td><img src="imagens_adota/<?php echo $registro['foto'];?>" style=" width: 100px; height:100px;"/></td>
		<td><?= $registro['nm'] ?></td>
		<td><?= $registro['sexo'] ?></td>
		<td><?= $registro['idade'] ?></td>
		<td><form action="altera-adote.php" method="post">
			<input type="hidden" name="id" value="<?=$registro['id_adote']?>">
			<button class="btn btn-primary" type="submit" value="Alterar" name="alterar"><span class="glyphicon glyphicon-pencil"></span></button></form></td>
		<td>
			<form action="aux-adote.php" method="post">
				<input type="hidden" name="cpf" value="<?=$registro['cpf']?>">
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
</body>
	
</div>
