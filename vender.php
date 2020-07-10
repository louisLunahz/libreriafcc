<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estiloventa.css">
	<title>Inicio</title>
</head>
<body>
	<?php 
	session_start();
	include 'includes/navbar.php';
	?>


	



	<?php
	if (isset($_SESSION['nombre'])) {  //si hay una sesion iniciada ?> 
		<div class="container">
			<h2 class="text-center">Vender Libro</h2>
			<form id="formularioVender" ENCTYPE="multipart/form-data" >
				<div class="row">

					<div class="col-md-6 form-group">
						<label for="nombre_libro">Nombre del libro:</label>
						<input type="text" class="form-control" id="nombre_libro" name="inputnameLibro">
					</div>


					<div class="col-md-6 form-group">
						<label for="categorias">Area:</label>
						<select class="form-control" id="categorias" name="categoriasSelector">
							<option>Computacion</option>
							<option>Hardware</option>
							<option>Matematicas</option>
							<option>Fisica</option>
							<option>Otros</option>

						</select>
					</div>
					<div class=" col-md-6 form-group">
						<label for="precioLibro">Precio en pesos Mexicanos:</label>
						<input type="text" class="form-control" id="precioLibro" name="inputPrecioLibro">
					</div>
					<div class="col-md-6 form-group">
						<label for="condicion">Condicion en la que se encuentra el libro:</label>
						<select class="form-control" id="condicion" name="condicionSelector">
							<option>Impecable</option>
							<option>Regular</option>
							<option>Maltratado</option>

						</select>
					</div>
					<div class="col-md-6 form-group">
						<label for="Descripcion">Descripcion:</label>
						<textarea class="form-control" rows="5" id="Descripcion" name="descripcionArea"></textarea>
					</div>
					<div class="col form-group">
						<label for="botonFoto">Agrega una foto de tu libro:</label>
						<input type="file" name="fotoLibro" id="botonFoto">

					</div>



				</div>

				<div class="mt-4 text-center" id="mensajeError" >
					
				</div>

				<button type="submit" class="btn btn-primary btn-block" >Aceptar</button>
			</form>
			
			
			
			
			
			
			
			
			
			

		</div>


	<?php }else{ //si no hay sesion iniciada?> 

		<div class="alert alert-danger" role="alert">

			<div>
				<h1 class="text-center">Debes estar registrado para poder vender</h1>
				<h2 class="text-center"><a href="registro.php" >Registrate ahora</a></h2>
				<h1 class="text-center">O</h1>
				<h2 class="text-center"><a href="login.php" >Inicia sesion</a></h2>
			</div>
		</div>   				
		
	<?php } ?>

	<!--Aqui mostraremos los libr-->






































	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/verificarDatosVender.js"></script>
</body>
</html>