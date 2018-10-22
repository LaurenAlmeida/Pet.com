<?php
require_once("cabecalho.php");?>
</head>
<body>
  <div class="container">
  	<div>
    <fieldset><legend>Faça seu cadastro</legend>
      <form validate="true" class="form-horizontal" method="post"  enctype="multipart/form-data" action="insere.php">
  <input type="hidden" name ="MAX_FILE_SIZE" value="200000" class="form-control">
   <div class="form-inline"><label>Arquivo:</label><input type="file" name="arquivo" class="form-control"></div>
 <div class="form-inline">
  <label for="nome">Nome:</label>
  <input class="form-control" type="text" name="nome" id="nome" data-valid="text" minlength="3" required>
  </div>
  <div class="form-inline">
  <label for="cpf">CPF:</label>
  <input class="form-control" type="text" name="cpf" id="cpf"placeholder="000.000.000-00" data-valid="text" minlength="14"required>
</div>
<div class="form-inline">
  <label for="dt_nasc">Data de nascimento:</label>
  <input class="form-control" type="date" name="dt_nasc" id="dt_nasc" data-valid="date" >
<div class="form-inline">
  <label for="celular">Celular:</label>
  <input class="form-control" type="mobile" name="celular" id="celular" data-valid="text">
</div>
<div class="form-inline">
  <label for="email">Email:</label>
  <input class="form-control" type="email" name="email" id="email" data-valid="email">
</div>
<div class="form-inline">
  <label for="senha">Senha:</label>
  <input  class="form-control"type="password" name="senha" id="senha" data-valid="text" required>
</div>
<div class="form-inline">
  <label for="ds_cep">CEP:</label>
  <input class="form-control" type="text" name="ds_cep" id="ds_cep" data-valid="text" required></div>
  <div class="form-inline">
    <label for="cidade">Cidade:</label>
    <input class="form-control" type="text" name="cidade" id="cidade" data-valid="text">
  </div>
  <div class="form-inline">
    <label for="estado">Estado:</label>
    <input class="form-control" type="text" name="estado" id="estado" data-valid="text">
  </div>
  <div class="form-inline">
    <label for="rua">Rua:</label>
    <input class="form-control" type="text" name="rua" id="rua" data-valid="text">
  </div>
  <div class="form-inline">
  <label for="num">Nº:</label>
  <input class="form-control" type="text" name="num" id="num" data-valid="text">
</div>
<div class="form-inline">
    <label for="bairro">Bairro:</label>
    <input class="form-control" type="text" name="bairro" id="bairro" data-valid="text">
  </div>
   <button  class="btn btn-primary" type="submit" name="enviar" id="enviar">Cadastrar</button>
  </form>
  </fieldset>
  </div>


  <script type="text/javascript">

        var nome = document.getElementById('nome');
        var cpf = document.getElementById('cpf');
        var data = document.getElementById('dt_nasc');
        var celular = document.getElementById('celular');
        var email = document.getElementById('email');
        var senha = document.getElementById('senha');
        var cep = document.getElementById('ds_cep');
        var cidade = document.getElementById('cidade');
        var estado = document.getElementById('estado');
        var rua = document.getElementById('rua');
        var num = document.getElementById('num');
        var bairro = document.getElementById('bairro');


        nome.addEventListener("blur", function(event){ //escuta acao de clique no botao

            event.preventDefault(); //previne padrao
            

            if (nome.value=="") {
                nome.style.borderColor = "red";
                
            }else{
                nome.style.borderColor = "#ccc";
                
            }

        });

        cpf.addEventListener("blur", function(event){ //escuta acao de clique no botao

            event.preventDefault(); //previne padrao

            if (cpf.value=="") {
                cpf.style.borderColor = "red";
                
            }else{
                cpf.style.borderColor = "#ccc";
            }

        });

        data.addEventListener("blur", function(event){ //escuta acao de clique no botao

            event.preventDefault(); //previne padrao

            if (data.value=="") {
                data.style.borderColor = "red";
                
            }else{
                data.style.borderColor = "#ccc";
                
            }

        });

        celular.addEventListener("blur", function(event){ //escuta acao de clique no botao

            event.preventDefault(); //previne padrao

            if (celular.value=="") {
                celular.style.borderColor = "red";
               
            }else{
                celular.style.borderColor = "#ccc";
                
            }

        });
        email.addEventListener("blur", function(event){
      
             event.preventDefault(); //previne padrao

            if (email.value=="") {
                email.style.borderColor = "red";
               
            }else{
                email.style.borderColor = "#ccc";
                
            }

        });

        senha.addEventListener("blur", function(event){
      
             event.preventDefault(); //previne padrao

            if (senha.value=="") {
                senha.style.borderColor = "red";
               
            }else{
                senha.style.borderColor = "#ccc";
                
            }

        });
       ds_cep.addEventListener("blur", function(event){
      
             event.preventDefault(); //previne padrao

            if (ds_cep.value=="") {
                ds_cep.style.borderColor = "red";
               
            }else{
                ds_cep.style.borderColor = "#ccc";
                
            }

        });

       cidade.addEventListener("blur", function(event){
      
             event.preventDefault(); //previne padrao

            if (cidade.value=="") {
                cidade.style.borderColor = "red";
               
            }else{
                cidade.style.borderColor = "#ccc";
                
            }

        });
        estado.addEventListener("blur", function(event){
      
             event.preventDefault(); //previne padrao

            if (estado.value=="") {
                estado.style.borderColor = "red";
               
            }else{
                estado.style.borderColor = "#ccc";
                
            }

        });
        rua.addEventListener("blur", function(event){
      
             event.preventDefault(); //previne padrao

            if (rua.value=="") {
                rua.style.borderColor = "red";
               
            }else{
                rua.style.borderColor = "#ccc";
                
            }

        });
        num.addEventListener("blur", function(event){
      
             event.preventDefault(); //previne padrao

            if (num.value=="") {
                num.style.borderColor = "red";
               
            }else{
                num.style.borderColor = "#ccc";
                
            }

        });

        bairro.addEventListener("blur", function(event){
      
             event.preventDefault(); //previne padrao

            if (bairro.value=="") {
                bairro.style.borderColor = "red";
               
            }else{
                bairro.style.borderColor = "#ccc";
                
            }

        });

      
    </script>
</body>
</html>
<?php
include "conecta.php";
if (isset($_POST['enviar'])){
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$dt_nascimento=$_POST['dt_nasc'];
$celular=$_POST['celular'];
$cep=$_POST['ds_cep'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$rua=$_POST['rua'];
$num=$_POST['num'];
$bairro=$_POST['bairro'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$senhacod= sha1($senha);

include "conf_uploadu.php";  // arquivo que contém as variáveis de configuração

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
    
  if (move_uploaded_file($arquivo_temporario, "imagens_perfil/$nome_arquivo"))
{
  echo " Upload do arquivo: ". $nome_arquivo." foi concluído com sucesso";
}
else
{
  echo "Arquivo não pode ser copiado para o servidor.";

}
}
else
{ 
  die("Selecione o arquivo a ser enviado");
}

$query="INSERT INTO usuario (foto_perfil,nome,cpf,dt_nascimento,celular,cep,cidade,estado,rua,bairro,num,email,senha) VALUES ('$nome_arquivo','$nome','$cpf','$dt_nascimento','$celular','$cep','$cidade','$estado','$rua','$bairro','$num','$email','$senhacod')";
/*echo $query;*/
$resultado=mysqli_query($conexao,$query);
if ($resultado){
  echo "<script>alert(Cadastro efetuado com sucesso!);</script>";
 echo "<script>location.href='index.php';</script>";
}else{
  echo "<script>alert('Erro ao cadastrar!Tente novamente.);</script>";
}
}
?>