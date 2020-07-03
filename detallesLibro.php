<!doctype html>
<html lang="es">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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


	







































	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>