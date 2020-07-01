<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estiloEditarLibro.css">
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
					<a class="nav-link" href="cont.php">contacto</a>				</li>

					<?php 
					if (isset($_SESSION['nombre'])){  ?>
						<li class="nav-item dropdown" >
							<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" href="login.php">
								<img src="img/person-24px.svg" alt="">
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
		if (!(isset($_SESSION['id_usuario'])) ) {
			header("location: index.php");
		}
		if (!isset($_GET['id']) ) { 
			header("location: micuenta.php");
		}
		$id_libro=$_GET["id"]; 
		$_SESSION['id_libro_editar']=$id_libro;
		//conectarse a la base de datos
		$host="bwswyscfjeaxoy04miln-mysql.services.clever-cloud.com";
		$user="u9yr87t84v3djrd7";
		$password="DKMw2Jzok7cXWaEwZYlY";
		$database="bwswyscfjeaxoy04miln";
		$consultaLibro="select * from libros where id_libro='$id_libro'";//clientes a realizar
		$link=mysqli_connect($host,$user,$password);
		mysqli_select_db($link, $database);
		if ($result = mysqli_query($link, $consultaLibro)) {
			$filas=mysqli_num_rows($result);
			//echo "$filas";
			if ($filas==1) { 
				$row=mysqli_fetch_array($result);

			}else{
				header("location: micuenta.php");
				
			}

		}


		?>

		<div class="container" >
			<h2 class="text-center">Editar Libro</h2>
			<form id="formularioEditar" ENCTYPE="multipart/form-data" >
				<div class="row">
					<div class="col-md-6 form-group">
						<label for="nombre_libro">Nombre del libro:</label>
						<input type="text" class="form-control" id="nombre_libro" name="inputnameLibro" value="<?php echo($row[1]) ?>">

					</div>


					<div class="col-md-6 form-group">
						<label for="categorias">Area:</label>
						<select class="form-control" id="categorias" name="categoriasSelector">
							<option selected="true" disabled="disabled">Selecciona Area</option>
							<option>Computacion</option>j
							<option>Hardware</option>
							<option>Matematicas</option>
							<option>Fisica</option>
							<option>Otros</option>

						</select>
					</div>
					<div class=" col-md-6 form-group">
						<label for="precioLibro">Precio en pesos Mexicanos:</label>
						<input type="text" class="form-control" id="precioLibro" name="inputPrecioLibro" value="<?php echo($row[4]) ?>">
					</div>
					<div class="col-md-6 form-group">
						<label for="condicion">Condicion en la que se encuentra el libro:</label>
						<select class="form-control" id="condicion" name="condicionSelector">
							<option selected="true" disabled="disabled">Seleciona Estado</option>
							<option>Impecable</option>
							<option>Regular</option>
							<option>Maltratado</option>

						</select>
					</div>
					<div class="col-md-6 form-group">
						<label for="Descripcion">Descripcion:</label>
						<textarea class="form-control" rows="5" id="Descripcion" name="descripcionArea" ><?php echo($row[3]) ?></textarea>
					</div>
					
					<div class="col-md-3 form-group" >
						<img src="<?php echo($row['ruta_imagen'])?>" width="150" height="200" alt="">
					</div>
					<div class="col-md-3 form-group">
						<label for="botonFoto">Agrega una foto de tu libro:</label>
						<input type="file" name="fotoLibro" id="botonFoto" >

					</div>
				</div>
				<div class="mt-4 text-center" id="mensajeError" >

				</div>

				<button type="submit" class="btn btn-primary btn-block" >Aceptar</button>
			</form>
			
			
			
			
			
			
			
			
			
			

		</div>




		<!--Aqui mostraremos los libr-->












		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="js/editarLibro.js"></script>
	</body>
	</html>