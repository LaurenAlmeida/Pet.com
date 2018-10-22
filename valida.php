<?php
session_start();
$cpf=$_POST["cpf"];
$senha=$_POST["senha"];
$senhacod= sha1($senha);
if (!(empty($cpf) OR empty($senha))) // testa se os campos do formulário não estão vazios
{
include "conecta.php";
$resultado=mysqli_query($conexao,"SELECT * from usuario WHERE cpf='$cpf' and
senha='$senhacod'");
if (mysqli_num_rows($resultado)== 1) // testa se retornou uma linha de resultado da tabela usuario com login e senha válidos
{
$_SESSION["logado"]=true; // armazena TRUE na variável de sessão logado
$_SESSION["cpf"]=$cpf; // armazena na variável de sessão login_adm o login digitado no formulário
header("Location:index_logado.php"); // direciona para o cadastro de produtos
}
else // else correspondente ao teste do resultado da função pg_num_rows
{
$_SESSION["msg"]="Usuário ou senha inválidos"; // caso não exista uma linha natabela usuario com o login e a senha válidos uma mensagem é armazenada na variável de sessão msg
header("Location:index.php"); // o fluxo da aplicação é direcionado novamente para o formulário de login - onde a variável de sessão contendo a mensagem será exibida
}
}
else // else correspondente ao resultado da função !empty
{
$_SESSION["msg"]="Preencha campos usuário e senha"; // caso contrário, ou seja, os campos do formulário login e senha estejam vazios, a mensagem é armazenada na variável msg
header("Location:index.php"); // o fluxo da aplicação é direcionado novamente para o formulário de login - onde a variável de sessão contendo a mensagem será exibida
}
?>
