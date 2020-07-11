<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estiloindex.css">
	<title>Inicio</title>
</head>
<body>
	<?php 
	session_start();
	include 'includes/navbar.php';
	?>

	<?php 
	
	if (!isset($_GET['id']) ) { //si no se recibe un id
		echo "<div><h1>Ningun Libro seleccionado</h1></div>";
		exit();
	}
	$id_libro=$_GET['id']; 
	if(isset($_SESSION['nombre'])){ //si el comprador es un usuario registrado
		$_SESSION['libro'] = $id_libro;
		header("location: confirmarCompra.php");
		
	}else{ $_SESSION['libro'] = $id_libro; ?>
	
	<div class="container">
		<h2 class="text-center">Llena los siguientes datos</h2>
		<form id="formularioComprar">
			<div class="row">
				<div class="col-md-6 form-group">
					<label for="matricula">Matricula:</label>
					<input type="text" class="form-control" id="matricula" name="matricula">
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
				<div class="col-md-6 form-group">
					<label for="email">Email:</label>
					<input type="text" class="form-control" id="email" name="email">
				</div>

				

			</div>
			<div class="mt-4 text-center" id="mensajeError" >
				
			</div>
			<button type="submit" class="btn btn-primary btn-block" >Confirmar Datos</button>
		</form>
		
	</div>
	
<?php } ?> 












































<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/verificarDatosUsuarioNoRegistrado.js"></script>
</body>
</html>