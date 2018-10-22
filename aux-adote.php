<?php require_once("cabecalho.php"); 
require_once ("conecta.php");  
?>
<body>
<div class="container">
<fieldset class="col-md-6"><legend>Vamos ajudar você a ter um amigo</legend>
    <p>Aqui você econtrará formas de entrar em contato com o responsável pelo pet que você quer adotar.</p>
<table class="table table-striped table-bordered">
    <?php
       if (isset($_POST['ajudar'])){


      $cpf=$_POST['cpf'];

        $query= "SELECT nome,email,celular FROM usuario WHERE cpf='$cpf'";
        $resultado=mysqli_query($conexao,$query);
        $linhas= mysqli_num_rows ($resultado);
        for($i=0;$i<$linhas;$i++){
        $registro=mysqli_fetch_array($resultado);
    ?>
    <tr>
        <td><?= $registro['nome'] ?></td>
        <td><?= $registro['email'] ?></td>
        <td><?= $registro['celular']?></td>
    </tr>
    <?php
        } 
    }
    ?>  
</table>        
</fieldset>
</div>
<br>
<br>
<br>