<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estiloindex.css">
	<title>Inicio</title>
</head>
<body>
	<?php 
	session_start();
	include 'includes/navbar.php';
	if (isset($_SESSION['nombre'])) {
		header("Location: index.php");
	}

	if(!isset($_SESSION['matriculaRegistro']) || !isset($_SESSION['emailRegistro']) || !isset($_SESSION['contraseniaRegistro']) ){
		header("Location: registro.php");
	}
	$matricula=$_SESSION['matriculaRegistro'];
	$email=$_SESSION['emailRegistro'];
	$password=$_SESSION['contraseniaRegistro'];

	?>

	<div class="container">
		<h2 class="text-center">Llena los siguientes datos</h2>
		<form id="formularioContinuarRegistro">
			<div class="row">
				<div class="col-md-6 form-group">
					<label for="apellidoP">Apellido Paterno:</label>
					<input type="text" class="form-control" id="apellidoP" name="apellidoP">
				</div>
				<div class="col-md-6 form-group">
					<label for="apellidoM">Apellido Materno:</label>
					<input type="text" class="form-control" id="apellidoM" name="apellidoM">
				</div>
				<div class="col-md-6 form-group">
					<label for="nombreUno">Primer nombre:</label>
					<input type="text" class="form-control" id="nombreUno" name="nombreUno">
				</div>
				<div class="col-md-6 form-group">
					<label for="nombreDos">Segundo nombre:</label>
					<input type="text" class="form-control" id="nombreDos" name="nombreDos">
				</div>
				<div class="col-md-6 form-group">
					<label for="carrera">Carrera:</label>
					<select class="form-control" id="carrera" name="carrera">
						<option>Ingenieria en ciencias de la computacion</option>
						<option>Licenciatura en ciencias de la computacion</option>
						<option>Ingenieria en tecnologias de la informacion</option>


					</select>
				</div>
				<div class="col-md-6 form-group">
					<label for="telefono">Telefono:</label>
					<input type="text" class="form-control" id="telefono" name="telefono">
				</div>
				



			</div>
			<div class="mt-4 text-center" id="mensajeError" >
				
			</div>
			<button type="submit" class="btn btn-primary btn-block" >Confirmar Datos</button>
		</form>

	</div>














































	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/verificarDatosContinuarRegistro.js"></script>
</body>
</html>