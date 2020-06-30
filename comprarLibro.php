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
	?>


	<nav class="navbar navbar-light " id="barraNavegacion">
		<a class="navbar-brand" href="index.php"> 
			<img src="img/libro.png" alt="Logo" style="width:40px;">LIBRERIA FCC
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active ">
					<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="todos.php">Todos los libros</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="vender.php">Vender</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">contacto</a>
				</li>

				<?php 
				if (isset($_SESSION['nombre'])){  ?>
					<li class="nav-item dropdown" >
						<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" href="login.php">
							
							<?php echo $_SESSION['nombre']; ?>
						</a>
						<div class="dropdown-menu " area-labelledby="navbarDropdown">
							<a class="dropdown-item" href="miCuenta.php">Cuenta</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="actions/cerrar_sesion.php">salir</a>
						</div>
						
					</li>
				<?php  }else{  ?>
					<li class="nav-item dropdown" >
						<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" href="login.php">
							<img src="img/person-24px.svg" alt="">
							<span>Cuenta</span>
						</a>

						<div class="dropdown-menu " area-labelledby="navbarDropdown">
							<a class="dropdown-item" href="login.php">Iniciar Sesion</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="registro.php">Registro</a>
						</div>
					</li>



				<?php } ?>





			</ul>
		</div>
	</nav>
	<!-- aqui acaba el navbar -->




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
	
	


	







































	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/verificarDatosUsuarioNoRegistrado.js"></script>
</body>
</html>