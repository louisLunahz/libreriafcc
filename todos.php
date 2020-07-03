<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estiloTodos.css">
	<title>Inicio</title>
</head>
<body>
	<?php 
	session_start();
	include 'includes/navbar.php';
	?>


	



		<div class="container">
			<h1 class="text-center">Todos los Libros</h1>
			<div class="row">
				<?php 
	//abrir la base de datos y obtener los datos de la tabla libros
				$host="bwswyscfjeaxoy04miln-mysql.services.clever-cloud.com";
				$user="u9yr87t84v3djrd7";
				$password="DKMw2Jzok7cXWaEwZYlY";
				$database="bwswyscfjeaxoy04miln";
		$ConsultaLibros="select * from libros where status=0";
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
							<a href="detallesLibro.php?id=<?php echo($row[0]) ?>">
								<img src="<?php echo($row[5]) ?> " class="w-100" width="150" height="300">
								<div class="overlay">
									<div class="detail">Ver detalles</div>
								</div>
							</a>
						</div>
						<h5 class="text-center"><?php echo "$row[1]"; ?></h5>
						<h5 class="text-center">$ <?php echo "$row[4]"; ?></h5>
						<a href="comprarLibro.php?id=<?php echo($row[0])?>" class="btn buy">Comprar</a>
					</div>

				<?php  }?>


			<?php  }?>
			

		<?php }  ?>



	</div>



</div>











<!--Aqui acaba la muestra de todos los libros-->







































<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>