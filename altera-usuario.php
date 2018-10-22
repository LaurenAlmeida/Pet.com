<?php
require_once ("cabecalho.php");
require_once("conecta.php");

if (isset($_POST['salvar'])){


      $cpf=$_POST['cpf'];

        $nome=$_POST['nome'];
    $celular=$_POST['celular'];
    $email=$_POST['email'];
    $cep=$_POST['ds_cep'];
    $rua=$_POST['rua'];
    $num=$_POST['num'];
    $bairro=$_POST['bairro'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $senha=$_POST['senha'];
  $senhacod= sha1($senha);



        $query="UPDATE usuario SET  nome='$nome', celular='$celular', email= '$email',senha='$senhacod',cep= '$cep' , rua= '$rua',num= '$num', bairro='$bairro', cidade='$cidade', estado='$estado'  WHERE cpf = '$cpf'";
$resultado=mysqli_query($conexao,$query);

if ($resultado){
  echo "<script>location.href='index_logado.php';</script>";
}
else{
  echo "Erro ao alterar.Tente novamente!";
} 
}

if (isset($_POST['alterar']) || isset($_POST['salvar'])){

$cpf=$_POST['cpf']; 

$query="SELECT * from usuario where cpf = '$cpf';";
$resultado=mysqli_query($conexao,$query);
$registro=mysqli_fetch_array($resultado);                                               

}
?>

  <div class="container">
    <form validate="true" method="post">
   <fieldset><legend>Atualize seu cadastro</legend>

    <input type="hidden" name="cpf" value="<?php echo $registro['cpf'] ?>">
<div class="form-inline">
  <label for="nome">Nome:</label>
  <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $registro['nome'] ?>">
  </div>
  <div class="form-inline">
  <label for="cpf">CPF:</label>
  <input class="form-control" type="text" name="cpf" id="cpf" value="<?php echo $registro['cpf'] ?>" disabled="">
</div>
<div class="form-inline">
  <label for="dt_nasc">Data de nascimento:</label>
  <input class="form-control" type="date" name="dt_nasc" id="dt_nasc" value="<?php echo $registro['dt_nascimento'] ?>">
</div>
<div class="form-inline">
  <label for="celular">Celular:</label>
  <input class="form-control" type="text" name="celular" id="celular" value="<?php echo $registro['celular'] ?>">
</div>
<div class="form-inline">
  <label for="email">Email:</label>
  <input class="form-control" type="email" name="email" id="email" value="<?php echo $registro['email'] ?>" required>
</div>
<div class="form-inline">
  <label for="senha">Senha:</label>
  <input  class="form-control"type="password" name="senha" id="senha" required>
</div>
<div class="form-inline">
  <label for="ds_cep">CEP:</label>
  <input class="form-control" type="text" name="ds_cep" id="ds_cep" value="<?php echo $registro['cep'] ?>" required>
</div>
<div class="form-inline">
    <label for="cidade">Cidade:</label>
    <input class="form-control" type="text" name="cidade" id="cidade" value="<?php echo $registro['cidade'] ?>">
  </div>
  <div class="form-inline">
    <label for="estado">Estado:</label>
    <input class="form-control" type="text" name="estado" id="estado" value="<?php echo $registro['estado'] ?>">
  </div>
  <div class="form-inline">
    <label for="rua">Rua:</label>
    <input class="form-control" type="text" name="rua" id="rua" value="<?php echo $registro['rua'] ?>">
  </div>
  <div class="form-inline">
  <label for="num">Nº:</label>
  <input class="form-control" type="number" name="num" id="num" value="<?php echo $registro['num'] ?>">
</div>
<div class="form-inline">
    <label for="bairro">Bairro:</label>
    <input class="form-control" type="text" name="bairro" id="bairro" value="<?php echo $registro['bairro'] ?>">
  </div>
    <button class="btn btn-primary" type="submit" name="salvar" id="salvar" value="Salvar">Salvar</button>
  </form>
  </fieldset>
  </div>
</body>
</html>
