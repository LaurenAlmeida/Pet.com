// checa se o documento foi carregado
$(document).ready(function () {
 
  $('#ds_cep').blur(function(){  
  
  var ds_cep = $('#ds_cep').val();

    $('#cidade').html('<span class="mensagem">Aguarde,    carregando ...</span>'); 
	
   $.ajax({
      url:"http://apps.widenet.com.br/busca-cep/api/cep/"+ds_cep+".json",
      datatype: 'JSON',
      success: function(retorno) {  
        $('#cidade').val(retorno.city);
        $('#estado').val(retorno.state);
        $('#rua').val(retorno.address);
        $('#bairro').val(retorno.district);    
      
       }
   });
  });
})