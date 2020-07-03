<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/estiloindex.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   

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








<div class="mt-4 text-center" id="mensajeError" >
    <span class="text-center">Libro Publicado Exitosamente</span>
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






































		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>