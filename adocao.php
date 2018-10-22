<?php
require_once("cabecalho.php");?>
</head>
<body>
<div class="container">
  <fieldset><legend>Preencha o formulario e ajude o pet a ser adotado:</legend>
    <form  validate="true"class="form-horizontal" method="post"  enctype="multipart/form-data" id="form-adote">
  <input type="hidden" name ="MAX_FILE_SIZE" value="200000" class="form-control">
   <div class="form-inline"> <label>Arquivo:</label><input type="file" name="arquivo" class="form-control" required></div>
   <div class="form-inline"> <label>CPF:</label>
  <input type="text" name="cpf" id="cpf" class="form-control" required></div>
  <div class="form-inline">
  <label>Nome:</label>
  <input type="text" name="nm" id="nm" class="form-control" required></div>
  <div class="form-inline"><label>Tipo:</label>
    <select name="tipo" id="tipo" class="form-control" required>
    <option value="01">Ave</option>
    <option value="02">Canino</option>
    <option value="03">Felino</option>
    <option value="04">Roedor</option>
    </select></div>
  <div class="form-inline"><label>Raça:</label>
  <select name="raca" id="raca" class="form-control" required>
   <option value="011">Periquito</option>
   <option value="021">Cachorro</option>
   <option value="031">Gato</option>
   <option value="041">Hamster</option>
   </select></div>
   <div class="form-inline"><label>Idade:</label>
   <input type="text" name="idade" id="idade" class="form-control"></div>
  <div class="form-inline"> <label>Sexo:</label>
  <select name="sexo" id="sexo" class="form-control" required>
   <option value="Fêmea">Feminino</option>
   <option value="Macho">Masculino</option>
   <option value="Não definido">Não definido</option>
   </select></div><br>
   <button type="submit" class="btn btn-primary" name="enviar" id="enviar">Enviar</button><br><br>
</fieldset>
</form>
</div>

</body>
</html>

<?php
include "conecta.php";
if (isset($_POST['enviar'])){

$cpf=$_POST['cpf'];
$nm=$_POST['nm'];
$tipo=$_POST['tipo'];
$raca=$_POST['raca'];
$sexo=$_POST['sexo'];
$idade=$_POST['idade'];

include "conf_uploadadota.php";  // arquivo que contém as variáveis de configuração

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
    
  if (move_uploaded_file($arquivo_temporario, "imagens_adota/$nome_arquivo"))
{
  
}
else
{
 

}
}
else
{ 
  die("Selecione o arquivo a ser enviado");
}


$query="INSERT INTO adote (foto,cpf,nm,cd_tipo,cd_raca,sexo,idade) VALUES ('$nome_arquivo','$cpf','$nm','$tipo','$raca','$sexo','$idade')";
$resultado=mysqli_query($conexao,$query);
if ($resultado){
 echo "<script>location.href='lista-td.php';</script>";;
}
else{
  echo "Erro ao cadastrar!";
}
}
?>