<?php
require_once ("cabecalho.php");
require_once("conecta.php");

if (isset($_POST['salvar'])){


     	$cpf=$_POST['cpf'];

        $novasenha=$_POST['novasenha'];
	

$senhacod= sha1($novasenha);
        $query="UPDATE usuario SET  senha='$senhacod' WHERE cpf = '$cpf'";
echo $query;
$resultado=mysqli_query($conexao,$query);

if ($resultado){
	echo "Senha alterada com sucesso!";
	echo "<script>location.href='index_logado.php';</script>";
}
else{
	echo "Erro ao alterar.Tente novamente!";
}	
}



if (isset($_POST['alterar']) || isset($_POST['salvar'])){

$cpf=$_POST['cpf'];	

$query="SELECT * from usuario where cpf = '$cpf'";
$resultado=mysqli_query($conexao,$query);
$registro=mysqli_fetch_array($resultado);
}
?>

<form method="post" action="redefine-senha.php">
	<div class="container">
	<fieldset><legend>Redefina sua senha:</legend>
	 <input type="hidden" name="cpf">
    <label>CPF:</label>
	<input class="form-control" type="text" name="cpf" id="cpf" required><br>
	<label>Senha:</label>
	<input class="form-control" type="password" name="novasenha" id="novasenha"><br>
	<button type="submit" name="salvar" id="salvar" class="btn btn-primary" value="Salvar">Salvar alterações
</button>
	</fieldset>
</form>
</div>
</body>
