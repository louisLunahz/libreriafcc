<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estiloLogin.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Compra correcta</title>

	<?php
	session_start();
	include 'includes/navbar.php';
	
	?>
</head>
<body>

	




	<div class="alert alert-success" role="alert">
		<h4 class="alert-heading">Compra realizada </h4>
		<p>Felicidades tu libro ya fue apartado a la espera para que te pongas en contacto con el comprador</p>
		<hr>
		<p class="mb-0">Es un gran libro</p>
	</div>

	<div class="card bg-dark text-blue">
		<img class="card-img" src="img/portada.jpg" alt="Card image">
		<div class="card-img-overlay">
		</div>
	</div>

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





	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/verificarLogin.js"></script>





</body>
</html>