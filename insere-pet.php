<?php
require_once("cabecalho.php");
require_once("verifica.php");?>
</head>
<body>
<div class="container">
  <form validate="true" class="form-horizontal" method="post">
	<fieldset><legend>Cadastre o animal:</legend>
    <div class="form-inline"><label>CPF:</label>
	<input type="text" name="cpf" id="cpf" class="form-control"></div>
	<div class="form-inline"><label>Tipo:</label>
    <select name="tipo" id="tipo" class="form-control">
    <option value="01">Ave</option>
    <option value="02">Canino</option>
    <option value="03">Felino</option>
    <option value="04">Roedor</option>
    </select></div><br>
<div class="form-inline">	<label>Raça:</label>
	<select name="raca" id="raca" class="form-control">
   <option value="011">Periquito</option>
   <option value="021">Cachorro</option>
   <option value="031">Gato</option>
   <option value="041">Hamster</option>
   </select></div><br>
<div class="form-inline">
	<textarea rows="4" cols="50" name="descricao" id="descricao" class="form-control" placeholder="Descreva o pet"></textarea></div><br>
<button type="submit" class="btn btn-primary" name="enviar" id="enviar">Enviar</button><br>
</form>
</div>
</body>
</html>
<?php
include "conecta.php";
if (isset($_POST['enviar'])){
$cpf=$_POST['cpf'];
$tipo=$_POST['tipo'];
$raca=$_POST['raca'];
$descricao=$_POST['descricao'];
$query="INSERT INTO pet (cpf,cd_tipo,cd_raca,descricao) VALUES ('$cpf','$tipo','$raca','$descricao')";
/*echo $query;*/
$resultado=mysqli_query($conexao,$query);
if ($resultado){
	echo "cadastro realizado com sucesso!";
}
else{
	echo "Erro ao cadastrar!";
}	
}
?>