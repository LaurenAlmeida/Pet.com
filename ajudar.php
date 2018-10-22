<?php
require_once ("cabecalho.php");
require_once("conecta.php");
require_once("verifica.php");

if (isset($_POST['salvar'])){


     	$id=$_POST['id'];

        $ajuda=$_POST['ajuda'];

        $query="UPDATE help SET  ajuda='$ajuda' WHERE id = '$id'";
$resultado=mysqli_query($conexao,$query);

if ($resultado){
	echo "<script>location.href='lista-td.php';</script>";
}
else{
	echo "Erro ao alterar.Tente novamente!";
}	
}


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
?>

<form method="post">
  		<body>
	<div class="container">
    <form validate="true" method="post">
	<fieldset><legend>Diga a melhor maneira de ajudar </legend>
    <input type="hidden" name="id" value="<?php echo $registro['id'] ?>">
	<label>Deixe aqui sua sugestão:</label><br>
	<textarea class="form-control" style="width: 571px;
    height: 261px;" rows="8" cols="70" name="ajuda" id="ajuda"></textarea><br><br>
	<button type="submit" name="salvar" id="salvar" class="btn btn-primary" value="Salvar">Salvar sugestão
</button>
	<br><br>
	</fieldset>
</form>
</div>
</body>
</html>
