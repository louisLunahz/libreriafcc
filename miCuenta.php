<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estiloMiCuenta.css">
	<title>Inicio</title>
</head>
<body>
	<?php 
	session_start();
	include 'includes/navbar.php';
	?>


	

	<div class="container">
		<h1 class="text-center">Mi cuenta</h1>
		<?php 
		if (!(isset($_SESSION['id_usuario'])) ) {
			header("location: index.php");
		}


		$id = $_SESSION["id_usuario"];
		$matricula = $_SESSION["matricula"];
		$carrera = $_SESSION["carrera"];
		$apellidoP = $_SESSION["apellidoP"];
		$apellidoM = $_SESSION["apellidoM"];
		$nombre = $_SESSION["nombre"];
		$nombre2 = $_SESSION["segundoNombre"];
		$tel = $_SESSION["telefono"];
		$email = $_SESSION["email"];
		?>
		<div class="row">
			<div class="col-md-6">
				<p class="text-center">Matricula: <?php echo "$matricula"; ?></p>
			</div>
			<div class="col-md-6">
				<p class="text-center">Email: <?php echo "$email"; ?></p>
			</div>
			<div class="col-md-6">
				<p class="text-center">Apellido Paterno: <?php echo "$apellidoP"; ?></p>
			</div>
			<div class="col-md-6">
				<p class="text-center">Apellido Materno: <?php echo "$apellidoM"; ?></p>
			</div>
			<div class="col-md-6">
				<p class="text-center">Nombre: <?php echo "$nombre"; ?></p>
			</div>
			<div class="col-md-6">
				<p class="text-center">Segundo nombre: <?php echo "$nombre2"; ?></p>
			</div>
			<div class="col-md-6">
				<p class="text-center">Telefono: <?php echo "$tel"; ?></p>
			</div>
			<div class="col-md-6">
				<p class="text-center">Carrera: <?php echo "$carrera"; ?></p>
			</div>
		</div>
		<h1 class="text-center">Mis libros </h1>
		<div class="row">
			<?php 
	//abrir la base de datos y obtener los datos de la tabla libros
			$host="bwswyscfjeaxoy04miln-mysql.services.clever-cloud.com";
			$user="u9yr87t84v3djrd7";
			$password="DKMw2Jzok7cXWaEwZYlY";
			$database="bwswyscfjeaxoy04miln";
			$ConsultaLibros="select * from libros where propietario=$id";
			$link=mysqli_connect($host,$user,$password);
			mysqli_select_db($link, $database);


			if ($result = mysqli_query($link, $ConsultaLibros)) {
				$filas=mysqli_num_rows($result);
			//echo "numero de filas: $filas";

				if ($filas<=0) {         ?>
					<div style=" color:blue;"><h1 class="text-center">No hay libros en venta por el momento</h1></div>
				<?php  }else{ 
					while ($row=mysqli_fetch_array($result)) { 					?>
						<div class="col-sm-6 col-md-4 col-lg-3 product-grid">
							<div class="image">
								<img src="<?php echo($row[5]) ?> " class="w-100" width="150" height="300">
							</div>
							<h5 class="text-center"><?php echo "$row[1]"; ?></h5>
							<h5 class="text-center">$ <?php echo "$row[4]"; ?></h5>
							<a href="editarLibro.php?id=<?php echo($row[0])?>" class="btn buy">Editar</a>
						</div>

					<?php  }?>


				<?php  }?>
				

			<?php }  ?>



		</div>
		

		
	</div>









	<!--Aqui acaba la muestra de todos los libros-->





































	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>