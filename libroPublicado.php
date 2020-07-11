<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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






































	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>