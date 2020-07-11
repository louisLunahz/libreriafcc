<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="
  stylesheet">
  <link rel="stylesheet" href="css/estiloindex.css">

  

  <title>Inicio</title>
</head>
<body>
 <?php 
 session_start();
 include 'includes/navbar.php';
 ?>
 

 

 <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/portadaLibros.jpg" width="1900" height="600" >
      <div class="carousel-caption">
        <h3>Ventas de libros FCC</h3>
        <p>Bueno Bonito Barato</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/librer.jpg" width="1900" height="600">
      <div class="carousel-caption">
        <h3>Sumate al mundo de la lectura</h3>
        <p>Descubre cosas nuevas</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slider-1.jpg" width="1900" height="600" >
      <div class="carousel-caption">
        <h3>Viaja a otro mundo </h3>
        <p>Diviertete</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>


<div class="container">
  <div class="media border p-3  ">
    <img src="img/05.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>FRANÇOIS MAURIAC <small></small></h4>
      <p>Dime lo que lees y te diré quien eres; eso es verdad, pero te conoceré mejor si me dices lo que relees.</p>
    </div>
  </div>
  <div class="media border p-3">
    <img src="img/2.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>ANNA QUINDLEN <small></small></h4>
      <p>Leemos en la cama ya que la lectura está a medio camino entre la vida y el sueño.</p>
    </div>
  </div>
  <div class="media border p-3">
    <img src="img/02.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>DOROTHY PARKER <small></small></h4>
      <p>Debe de ser un libro de regalo. Es decir, que no lo tendrías en otras circunstancias.</p>
    </div>
  </div>
  <div class="media border p-3">
    <img src="img/002.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>ANATOLE FRANCE <small></small></h4>
      <p>Nunca prestes libros, pues nadie los devuelve. Los únicos libros que tengo en mi biblioteca son libros que me prestaron.</p>
    </div>
  </div>
  <div class="media border p-3">
    <img src="img/0002.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>BENJAMIN FRANKLIN <small></small></h4>
      <p>La persona más digna de lástima es la que está sola en un día lluvioso y no sabe leer.</p>
    </div>
  </div>
  <div class="media border p-3">
    <img src="img/000005.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>CONFUCIO <small></small></h4>
      <p>El leer sin pensar nos hace una mente desordenada. El pensar sin leer nos hace desequilibrados.</p>
    </div>
  </div>
  <div class="media border p-3">
    <img src="img/000002.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>KYLE LIPPERT <small></small></h4>
      <p>Seguro que leer un libro bajo un árbol es relajante, pero imagina lo estresante que es para el árbol ver a un montón de amigos muertos en tu mano.</p>
    </div>
  </div>


</div>

<div class="card bg-dark text-blue">
  <img class="card-img" src="img/portada.jpg" alt="Card image">
  <div class="card-img-overlay">
  </div>
</div>


<!--Footer  -->
<div class="container">


  <hr />
  <div class="text-center center-block">
    <p class="txt-railway"></p>
    <br />
    <a href="https://www.facebook.com"><i class="fa fa-facebook-square fa-3x social"></i></a>
    <a href="https://twitter.com"><i class="fa fa-twitter-square fa-3x social"></i></a>
    <a href="https://plus.google.com"><i class="fa fa-google-plus-square fa-3x social"></i></a>
    <a href="mailto:joluzaog@gmail.com"><i class="fa fa-envelope-square fa-3x social"></i></a>
  </div>
  <hr />
</div>
<!--Termina la portada -->
<!--Aqui mostraremos los libr-->







































<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>