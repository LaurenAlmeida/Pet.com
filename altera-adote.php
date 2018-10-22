<?php
require_once ("cabecalho.php");
require_once("conecta.php");
require_once("verifica.php");

if (isset($_POST['salvar'])){


     	$id_adote=$_POST['id'];

        $nm=$_POST['nm'];
		$cpf=$_POST['cpf'];
		$cd_tipo=$_POST['cd_tipo'];
		$cd_raca=$_POST['cd_raca'];
		$sexo=$_POST['sexo'];
		$idade=$_POST['idade'];

        $query="UPDATE adote SET  nm='$nm', cpf='$cpf', cd_tipo= '$cd_tipo',cd_raca= '$cd_raca',sexo='$sexo',idade='$idade' WHERE id_adote = '$id_adote'";
$resultado=mysqli_query($conexao,$query);

if ($resultado){
	echo "Cadastro alterado com sucesso!";
	echo "<script>location.href='lista-td.php';</script>";
}
else{
	echo "Erro ao alterar.Tente novamente!";
}	
}



if (isset($_POST['alterar']) || isset($_POST['salvar'])){

$id_adote=$_POST['id'];	

$query="SELECT * from adote where id_adote = '$id_adote';";
$resultado=mysqli_query($conexao,$query);
$registro=mysqli_fetch_array($resultado);

}
?>

<form method="post">
		<body>
	<div class="container">
    <form validate="true" class="form-horizontal" method="post">
	<fieldset><legend>Atualize o cadastro do Pet</legend>
    <input type="hidden" name="id_adote" value="<?php echo $registro['id_adote'] ?>">
    <div class="form-inline"> <label>Nome:</label>
	<input class="form-control" type="text" name="nm" id="nm" value="<?php echo $registro['nm'] ?>"></div>
	 <div class="form-inline"><label>CPF:</label>
	<input class="form-control" type="text" name="cpf" id="cpf" value="<?php echo $registro['cpf'] ?>" disabled></div>
	 <div class="form-inline"><label>Tipo:</label>
    <select class="form-control" name="tipo" id="tipo" value="<?php echo $registro['cd_tipo'] ?>">
    <option value="01">Ave</option>
    <option value="02">Canino</option>
    <option value="03">Felino</option>
    <option value="04">Roedor</option>
    </select></div>
	 <div class="form-inline"><label>Raça:</label>
	<select class="form-control" name="raca" id="raca" value="<?php echo $registro['cd_raca'] ?>">
   <option value="011">Periquito</option>
   <option value="021">Cachorro</option>
   <option value="031">Gato</option>
   <option value="041">Hamster</option>
   </select></div>
    <div class="form-inline"><label>Idade:</label>
   <input class="form-control" type="text" name="idade" id="idade" value="<?php echo $registro['idade'] ?>"></div>
  <div class="form-inline"><label>Sexo:</label> <select class="form-control" name="sexo" id="sexo" value="<?php echo $registro['sexo'] ?>">
   <option value="1">Feminino</option>
   <option value="2">Masculino</option>
   <option value="4">Não definido</option>
   </select> <div class="form-inline">
<button type="submit" class="btn btn-primary" value="Salvar" name="salvar" id="salvar">Salvar alterações</button>
	</fieldset>
</form>
</div>
</body>
</html>