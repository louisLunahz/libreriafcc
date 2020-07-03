
<nav class="navbar navbar-light navbar-expand-md " id="barraNavegacion">
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