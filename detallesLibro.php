<!doctype html>
<html lang="es">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/confistil.css">
	<title>Inicio</title>
</head>
<body>
	<?php 
	session_start();
	include 'includes/navbar.php';
	?>

	<?php 

	if (!isset($_GET['id']) ) { 
		echo "<div><h1>Ningun Libro seleccionado</h1></div>";
	}else{ 
		$id_libro=$_GET["id"]; 
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
				echo "Error";
			}

		}
	} ?>
	
	<div class="row">
		<div class="col-md-6">
			<div class="image">
				<img src="<?php echo($row[5]) ?> " class="w-100">
			</div>
		</div>
		<div class="col-md-6">
			<h1 class="text-center"> <?php echo "$row[1]"; ?></h1>
			<br>
			<span>Area: <?php echo "$row[2]"; ?></span>
			<br>
			<span>Descripcion: <?php echo "$row[3]"; ?></span>
			<br>
			<span>Estado: <?php echo "$row[6]"; ?></span>
			<br>
			<span>$ <?php echo "$row[4]"; ?></span>
			<a href="comprarLibro.php?id=<?php echo $id_libro?>" class="btn buy">Comprar</a>

		</div>
	</div>


	






































	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>