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
				<li class="nav-item  ">
					<a class="nav-link" href="index.php">Inicio <span class="sr-only"></span></a>
				</li>
				<li class="nav-item active" >
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



		<div class="container">
			<h1 class="text-center">Todos los Libros</h1>
			<div class="row">
				<?php 
	//abrir la base de datos y obtener los datos de la tabla libros
				$host="localhost";
				$user="root";
				$password="";
				$database="libreria";
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