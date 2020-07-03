<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="js/verificarDatosContinuarRegistro.js"></script>
</body>
</html>