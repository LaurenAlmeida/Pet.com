<div class="footer">
        		<br>
<div class="container">
<fieldset class="col-md-5" style="float: left;">
   <p><h4 style="text-align: center;">Informações</h4></p>
  <p><h5><span class="glyphicon glyphicon-map-marker"></span> Endereço: Rua Félix Xavier da Cunha 95, Centro - Pelotas / RS </h5></p>
  <p><h5><span class="glyphicon glyphicon-envelope"></span> Email: sospet98@gmail.com</h5></p>
  <p><h5><span class="glyphicon glyphicon-phone-alt"></span> Telefone: (53)30292489</h5></p>
  <p><h5><span class="glyphicon glyphicon-phone"></span> Celular: (53)984292489 </h5> </p>
  </fieldset>

 <fieldset class="col-md-5" style="float: right;">
  <p><h4 style="text-align: center;">Fale conosco</h4></p>
   <form validate="true" action="contato.php" method="post" style="float: right;">
          <p><div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="nome" type="text" class="form-control" name="nome" placeholder="Nome">
 </div></p>
         <p><div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <input id="email" type="email" class="form-control" name="email_resposta" placeholder="Email">
  </div></p>
  <p><div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
    <textarea class="form-control" rows="4" cols="50" name="mensagem" id="mensagem" placeholder="Escreva sua mensagem..."></textarea>
  </div></p>
    <button class="btn btn-primary" name="enviar" id="enviar" style="float: right;">Enviar</button>
</form>
</fieldset>
</div>
<br>
<br>
<p class="small" style="text-align: center;">
         Copyright 2018 - by Lauren Almeida
      </p>      
    </div>


     <script type="text/javascript">

        var nome = document.getElementById('nome');
        var email = document.getElementById('email');
        var msg = document.getElementById('mensagem');

        nome.addEventListener("blur", function(event){ //escuta acao de clique no botao

            event.preventDefault(); //previne padrao
            

            if (nome.value=="") {
                nome.style.borderColor = "red";
                
            }else{
                nome.style.borderColor = "#ccc";
                
            }

        });

        email.addEventListener("blur", function(event){ //escuta acao de clique no botao

            event.preventDefault(); //previne padrao

            if (email.value=="") {
                email.style.borderColor = "red";
                
            }else{
                email.style.borderColor = "#ccc";
            }


        });

        msg.addEventListener("blur", function(event){ //escuta acao de clique no botao

            event.preventDefault(); //previne padrao

            if (msg.value=="") {
                msg.style.borderColor = "red";
                
            }else{
                msg.style.borderColor = "#ccc";
            }


        });
      
    </script>

    </body>
</html>