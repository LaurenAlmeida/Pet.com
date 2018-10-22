<?php
require_once ("cabecalho.php");
require_once("conecta.php");
require_once("verifica.php");

if (isset($_POST['salvar'])){


     	$id=$_POST['id'];

        $nm_pet=$_POST['nm_pet'];
		$nm_responsavel=$_POST['nm_responsavel'];
		$situacao=$_POST['situacao'];
		$descricao=$_POST['descricao'];

        $query="UPDATE help SET  nm_pet='$nm_pet', nm_responsavel='$nm_responsavel', situacao= '$situacao',descricao= '$descricao' WHERE id = '$id'";
$resultado=mysqli_query($conexao,$query);

if ($resultado){
	echo "<script>location.href='lista-td.php';</script>";
}
else{
	echo "Erro ao alterar.Tente novamente!";
}	
}



if (isset($_POST['alterar']) || isset($_POST['salvar'])){

$id=$_POST['id'];	

$query="SELECT * from help where id = '$id';";
$resultado=mysqli_query($conexao,$query);
$registro=mysqli_fetch_array($resultado);
if($registro['situacao']==1)
{

   $adotado="checked";	
    $semlar="";
}
else
{
	 $adotado="";
	 $semlar="checked";
}
  
}
?>

<form method="post">
		<body>
	<div class="container">
    <form validate="true" class="form-horizontal" method="post">
	<fieldset><legend>Atualize o cadastro do animal</legend>
    <input type="hidden" name="id" value="<?php echo $registro['id'] ?>">
   <div class="form-inline"> <label>Nome Animal:</label>
	<input class="form-control"  type="text" name="nm_pet" id="nm_pet" value="<?php echo $registro['nm_pet'] ?>"></div>
	<div class="form-inline"><label>Nome Responsável:</label>
	<input class="form-control" type="text" name="nm_responsavel" id="nm_responsavel" value="<?php echo $registro['nm_responsavel'] ?>"></div>
    <label>Situação:</label><br>
	<input type="radio" name="situacao" id="situacao" value="1" <?php echo $adotado;?> >Adotado<br>
	<input type="radio" name="situacao" id="situacao" value="2" <?php echo $semlar; ?> >Sem lar<br><br>
	<div class="form-inline"><label>Descreva como o animal se encontra:</label><br>
	<textarea class="form-control" rows="4" cols="50" name="descricao" id="descricao"><?php echo $registro['descricao'] ?></textarea></textarea></div>
	<button type="submit" name="salvar" id="salvar" class="btn btn-primary" value="Salvar">Salvar alterações
</button>
	<br><br>
	</fieldset>
</form>
</div>
</body>
</html>
