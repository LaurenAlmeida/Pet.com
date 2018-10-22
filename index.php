<?php
require_once ("cabecalho.php");
?>
<title>Sobre Pet.com</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
#pet1 {
width:255px;
    height: 255px;
    border-radius: 200px;
        padding: 10px;
  background-image: url(img/gato.jpg);
  margin-left: 25px; 
   margin-top: 0px; 
   margin-right: 0px;  
  float: left;
}
#pet2 {
width:255px;
    height: 255px;
    border-radius: 200px;
        padding: 10px;
 background-image: url(img/peri.jpg);
  margin-left: 25px; 
   margin-top: 0px; 
   margin-right: 0px;  
  float: left;
}
#pet3 {
  width:255px;
    height: 255px;
    border-radius: 200px;
        padding: 10px;
  background-image: url(img/cao.jpg) ;
  background-position: cover;
   margin-left: 25px; 
   margin-top: 0px; 
   margin-right: 0px;  
  float: left;
}
#pet4{
  width:255px;
    height: 255px;
    border-radius: 200px;
        padding: 10px;
  background-image: url(img/coelho.jpg);
   margin-left: 25px; 
   margin-top: 0px; 
   margin-right: 0px;  
  float: left;
}
  </style>
</head>
<body>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/femea.jpg" alt="Adote" style="width:100%;">
        <div class="carousel-caption">
          <h3>Adote!</h3>
          <a href="#">Você ganha um amigo!</a>
        </div>
      </div>

      <div class="item">
        <img src="img/picado.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Ajude um pet</h3>
          <a href="#">Saiba como proceder com animais que precisam da sua ajuda</a>
        </div>
      </div>
    
      <div class="item">
        <img src="img/adotado.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Ajude um pet a encontrar um lar</h3>
          <a href="#">Cadastre animais para adoção</a>
        </div>
      </div>
  
    </div>
    <!-- Left and right controls -->
   <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div><br><br>
  <br>
  <h3 class="title" style="text-align: center;">Pets ajudados</h3>
  <br>
  <br>
  <div id="pet1"></div>
    <div id="pet2"></div>
    <div id="pet3"></div>
    <div id="pet4"></div>
    <br>
    <br>
    <br>
<h3 style="text-align: center;">Sobre</h3>
<br>

<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>

<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
<br>
<br>
<br>
<br>
</div>
</body>
<?php
require_once("rodape.php")
?>