<?php
require_once("cabecalho.php");
if(isset($_SESSION["msg"])) // testa a variável de sessão msg
{
echo $_SESSION["msg"]; // mostra mensagem armazenada
unset($_SESSION['msg']); // elimina variável de sessão msg
}
?>
<html>
<head>
<title>Login </title>
</head>
<body>
	<div class="container">
<fieldset class="col-md-6"><legend>Entre</legend>
<form validate="true" name="acesso" action="valida.php" method="post">
	 <div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="cpf" type="text" class="form-control" name="cpf" placeholder="000.000.000-00" data-valid="text" required minlength="14">
 </div><br>  
 <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="senha" type="password" class="form-control" name="senha" placeholder="*****" data-valid="text" required>
  </div><br>
   <a href="redefine-senha.php">Esqueci minha senha</a><br>
<button type="submit" class="btn btn-primary" value="Enviar" name="enviar" id="enviar" style="float: right;">Enviar</button>
</form>
</fieldset>
</div>
</body>
</html>
