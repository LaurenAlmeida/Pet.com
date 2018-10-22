 <!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script type="text/javascript" src="cep.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="validatons.js"></script>
<script src="validator.js"></script>
<script src="jquery-simple-validator.min.js"></script>
<link rel="stylesheet" type="text/css" href='css/estilo.css'>
<link rel="stylesheet" type="text/css" href='css/bootstrap.css'>
<link rel="stylesheet" type="text/css" href='css/form.css'>

    <?php
session_start();

 if(!isset($_SESSION['logado'])){

?>
      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="img/Logo.png" alt="Pet.com" style="height: 20px;"></a>
    </div>
   
    <ul class="nav navbar-nav">
         <li><a href="jornal.php">Informações</a></li>
         <li><a href="#"  data-toggle="modal" data-target="#modal-msg">Aviso</a></li>
<div class="modal fade" id="modal-msg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
         <h4>Seja bem vindo</h4>
         <p>Se você é novo por aqui deve fazer seu cadastro para ter acesso</p>
          as funcionalidades do site.</p>
        <P>Se você ja fez seu cadastro,faça seu login.</P>
        </div>
</div>
</div>
</div>
</div>
</div>
</div>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="insere.php"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>

      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
<?php
}else{
  ?>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index_logado.php"><img src="img/Logo.png" alt="Pet.com" style="height: 20px;"></a>
    </div>
<ul class="nav navbar-nav">
          <li><a href="lista-td.php" >Animais que precisam de ajuda</a></li>
            <li><a href="jornal.php">Informações</a></li>
          <li><a href="insere-help.php">Cadastro de solicitação de ajuda</a></li>
        <li><a href="adocao.php">Cadastro de adoção</a></li>
         </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Sair</a></li>
    </ul>
<?php
}
?>
  </div>
</nav>

