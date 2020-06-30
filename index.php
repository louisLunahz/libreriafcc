<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/estiloindex.css">
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
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/portadaLibros.jpg" width="1900" height="600" >
      <div class="carousel-caption">
        <h3>Ventas de libros FCC</h3>
        <p>Bueno Bonito Barato</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/librer.jpg" width="1900" height="600">
       <div class="carousel-caption">
        <h3>Sumate al mundo de la lectura</h3>
        <p>Descubre cosas nuevas</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slider-1.jpg" width="1900" height="600" >
           <div class="carousel-caption">
            <h3>Viaja a otro mundo </h3>
            <p>Diviertete</p>
          </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="container">
<div class="media border p-3  ">
  <img src="img/05.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>FRANÇOIS MAURIAC <small></small></h4>
    <p>Dime lo que lees y te diré quien eres; eso es verdad, pero te conoceré mejor si me dices lo que relees.</p>
  </div>
</div>
<div class="media border p-3">
  <img src="img/2.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>ANNA QUINDLEN <small></small></h4>
    <p>Leemos en la cama ya que la lectura está a medio camino entre la vida y el sueño.</p>
  </div>
</div>
<div class="media border p-3">
  <img src="img/02.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>DOROTHY PARKER <small></small></h4>
    <p>Debe de ser un libro de regalo. Es decir, que no lo tendrías en otras circunstancias.</p>
  </div>
</div>
<div class="media border p-3">
  <img src="img/002.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>ANATOLE FRANCE <small></small></h4>
    <p>Nunca prestes libros, pues nadie los devuelve. Los únicos libros que tengo en mi biblioteca son libros que me prestaron.</p>
  </div>
</div>
<div class="media border p-3">
  <img src="img/0002.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>BENJAMIN FRANKLIN <small></small></h4>
    <p>La persona más digna de lástima es la que está sola en un día lluvioso y no sabe leer.</p>
  </div>
</div>
<div class="media border p-3">
  <img src="img/000005.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>CONFUCIO <small></small></h4>
    <p>El leer sin pensar nos hace una mente desordenada. El pensar sin leer nos hace desequilibrados.</p>
  </div>
</div>
<div class="media border p-3">
  <img src="img/000002.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>KYLE LIPPERT <small></small></h4>
    <p>Seguro que leer un libro bajo un árbol es relajante, pero imagina lo estresante que es para el árbol ver a un montón de amigos muertos en tu mano.</p>
  </div>
</div>


</div>

<div class="card bg-dark text-blue">
  <img class="card-img" src="img/portada.jpg" alt="Card image">
  <div class="card-img-overlay">
  </div>
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