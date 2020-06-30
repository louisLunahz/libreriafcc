<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estiloLogin.css">
	<title>Login</title>

	<?php
	session_start();
	if (isset($_SESSION['nombre'])) {
		header("Location: index.php");
	}
	?>
</head>
<body>

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









			</ul>
		</div>
	</nav>














	<section class="h-100 ">
		<div class="container h-100 ">
			<div class="row  justify-content-center h-100">
				<div class="card-wrapper ">
					<div class="row justify-content-center">
						<img src="img/person.png" style="" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation" novalidate="" id="formulario">
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" name="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										
									</label>
									<input id="password" name="pass" type="password" class="form-control" name="password" required data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>


								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									No tienes una cuenta? <a href="registro.php">Crea una</a>
								</div>
								<div class="mt-4 text-center" id="mensajeError">

								</div>

							</form>
						</div>
					</div>
						<!--<div class="footer">
Copyright &copy; 2017 &mdash; Your Company 
</div>-->
</div>
</div>
</div>
</section>




























<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/verificarLogin.js"></script>





</body>
</html>