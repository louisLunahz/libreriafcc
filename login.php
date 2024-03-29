<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estiloLogin.css">
	<title>Login</title>

	
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




























<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/verificarLogin.js"></script>





</body>
</html>