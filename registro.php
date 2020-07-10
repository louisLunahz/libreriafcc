<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style type='text/css'>
		form {
			margin:10px; 
			padding: 0 10px;
			background: #F5F5F5;  
		}
	</style>
	
</head>
<body>

	<?php
	session_start();
	include 'includes/navbar.php';
	if (isset($_SESSION['nombre'])) {
		header("Location: index.php");
	}
	?>

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

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/verificarRegistro.js"></script>
</body>
</html>