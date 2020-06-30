<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/registroExitoso.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   

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
						<a class="nav-link" href="cont.php">contacto</a>
					</li>

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
<!-- aqui pondremos una portada perrona-->



<div class="container cajaRegistro" >
  <h1 class="text-center">Registro exitoso</h1>
</div>

<!--Footer  -->
<div class="container">


    <hr />
        <div class="text-center center-block">
            <p class="txt-railway"></p>
            <br />
                <a href="https://www.facebook.com"><i class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com"><i class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com"><i class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:joluzaog@gmail.com"><i class="fa fa-envelope-square fa-3x social"></i></a>
</div>
    <hr />
        </div>
<!--Termina la portada -->
<!--Aqui mostraremos los libr-->






































		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>