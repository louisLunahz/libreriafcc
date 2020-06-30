<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type='text/css'>
	form {
  margin:10px; 
  padding: 0 10px;
  background: #F5F5F5;  
}
</style>
	<?php
	session_start();
	if (isset($_SESSION['nombre'])) {
		header("Location: index.php");
	}
	?>
</head>
<body class="">
	<nav class="navbar navbar-light" id="barraNavegacion">
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
								<h4 class="card-title">Registro</h4>
								<form method="POST" class="my-login-validation" id="formularioRegistro" action="validarUsuarioRegistro.php" method="post">
									<div class="form-group">
										<label for="matricula">Matricula</label>
										<input id="matricula" name="matricula" type="text" class="form-control" required autofocus>

									</div>

									<div class="form-group">
										<label for="email">Email</label>
										<input id="email" name="email" type="email" class="form-control"required data-eye>

									</div>
									<div class="form-group">
										<label for="password">Contraseña</label>
										<input id="password" name="password" type="password" class="form-control" required data-eye>

									</div>
									<div class="mt-4 text-center" id="mensajeError">
										
									</div>


									<div class="form-group m-0">
										<button type="submit" class="btn btn-primary btn-block">
											Registro
										</button>
									</div>
									<div class="mt-4 text-center">
										Ya tienes una cuenta? <a href="login.php">Ingresar</a>
									</div>
									

								</form>
							</div>
						</div>
			
					</div>
				</div>
			</div>
		</section> 

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="js/verificarRegistro.js"></script>
	</body>
	</html>