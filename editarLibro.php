<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estiloEditarLibro.css">
	<title>Inicio</title>
</head>
<body>
	<?php 
	session_start();
	include 'includes/navbar.php';
	?>


	



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
				header("location: miCuenta.php");
				
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












		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script src="js/editarLibro.js"></script>
	</body>
	</html>