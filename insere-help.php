<?php
require_once("cabecalho.php");
require_once("verifica.php");
/*alter table help add column foto_help varchar(255)*/?>
</head>
<body>
	<div class="container">
    <fieldset class="col-md-12"><legend>Diga como podemos ajudar o pet</legend>
    <form validate="true" class="form-horizontal" method="post"  enctype="multipart/form-data" id="form-adote">
  <input type="hidden" name ="MAX_FILE_SIZE" value="200000" class="form-control">
   <div class="form-inline"> <label>Arquivo:</label><input type="file" name="arquivo" class="form-control" required></div>
    <div class="form-inline"> <label>Nome Animal:</label>
	<input type="text" name="nm_pet" id="nm_pet" class="form-control" ></div>
   <div class="form-inline"><label>CPF:</label>
  <input type="text" name="cpf" id="cpf" class="form-control"></div>
 <div class="form-inline">	<label>Nome Responsável:</label>
	<input type="text" name="nm_responsavel" id="nm_responsavel" class="form-control"></div>
	<label>Situação:</label><br>
	<input type="radio" name="situacao" id="situacao" value="1">Adotado<br>
	<input type="radio" name="situacao" id="situacao" value="2">Sem lar<br><br>

 <div class="form-inline">
	<textarea class="form-control" rows="5" cols="70" name="descricao" id="descricao" placeholder="Descreva como o animal se encontra"></textarea></div>
	 <button type="submit" class="btn btn-primary" name="enviar" id="enviar">Enviar</button><br><br>
	</fieldset>
</form>
</div>
</body>
</html>
<?php
include "conecta.php";
if (isset($_POST['enviar'])){
$nm_pet=$_POST['nm_pet'];
$cpf=$_POST['cpf'];
$nm_responsavel=$_POST['nm_responsavel'];
$situacao=$_POST['situacao'];
$descricao=$_POST['descricao'];

include "conf_uploadh.php";  // arquivo que contém as variáveis de configuração

$nome_arquivo=$_FILES['arquivo']['name'];  
$tamanho_arquivo=$_FILES['arquivo']['size']; 
$arquivo_temporario=$_FILES['arquivo']['tmp_name']; 

if (!empty($nome_arquivo))
{
  if($sobrescrever=="não" && file_exists("$caminho/$nome_arquivo"))
    die("Arquivo já existe");

  if($limitar_tamanho=="sim" && ($tamanho_arquivo > $tamanho_bytes))  
    die("Arquivo deve ter o no máximo $tamanho_bytes bytes");

  $ext = strrchr($nome_arquivo,'.');
  if (($limitar_ext == "sim") && !in_array($ext,$extensoes_validas))
    die("Extensão de arquivo inválida para upload");
    
  if (move_uploaded_file($arquivo_temporario, "imagens_help/$nome_arquivo"))
{
 
}
else
{
  echo "Arquivo não pode ser copiado para o servidor.";

}
}
else
{ 
  
}


$query="INSERT INTO help (foto_help,nm_pet,cpf,nm_responsavel,situacao,descricao) VALUES ('$nome_arquivo','$nm_pet','$cpf','$nm_responsavel','$situacao','$descricao')";
/*echo $query;*/
$resultado=mysqli_query($conexao,$query);

if ($resultado){
  echo "<script>location.href='lista-td.php';</script>";
}
else{
	echo "Erro ao solicitar.Tente novamente!";
}	
}
?>

