<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/confistil.css">
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                    href="login.php">
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                href="login.php">
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

<?php 
 $id_libro=$_SESSION['libro'];
$matricula=$_SESSION['matricula'];
$carrera=$_SESSION['carrera'];
$telefono=$_SESSION['telefono'];
$email=$_SESSION['email'];
$host="localhost";
$user="root";
$password="";
$database="libreria";
$consultaLibro="select * from libros where id_libro='$id_libro'";
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
$ban=$row[7];
    $consultaUsuario="select * from usuarios where id_usuario='$ban'";
    if ($result = mysqli_query($link, $consultaUsuario)) {
     $filas=mysqli_num_rows($result);
			//echo "$filas";
     if ($filas==1) { 
        $row1=mysqli_fetch_array($result);

    }else{
        echo "Error";
    }

}
//para obtener los datos del vendedor haces una consulta, en la tabla libros aparece el campo propietario
//en la primer columna deben estar los datos del comprador, en la segunda los del libro y en la tercera los del vendedor
//cuando el comprador le de en el boton confirmar compra debe redirecionarlo a otra pagina
//que diga compra realizada o algo asi y ademas se debe actualizar el estatus del libro a 1
//la base de datos a usar esta en el rar y se llama libreria(5).sql


?>

<div class="row">
    <div class="col-md-4">
        <h3 class="text-center">Tus datos</h3>
        <span > Matricula: <?php echo "$matricula"; ?></span>
        <br>
        <span>Carrera: <?php echo "$carrera"; ?></span>
        <br>
        <span>Telefono: <?php echo "$telefono"; ?></span>
        <br>
        <span>Email: <?php echo "$email"; ?></span>
        <br>    


    </div>
    <div class="col-md-4">
        <h3 class="text-center">Datos del libro</h3>
        <span > <?php echo "$row[1]"; ?></span>
        <br>
        <span>Area: <?php echo "$row[2]"; ?></span>
        <br>
        <span>Descripcion: <?php echo "$row[3]"; ?></span>
        <br>
        <span>Estado: <?php echo "$row[6]"; ?></span>
        <br>
        <span>$ <?php echo "$row[4]"; ?></span>
    </div>
    <div class="col-md-4">
        <h3 class="text-center">Datos del vendedor</h3>
        <span >Matricula: <?php echo "$row1[1]"; ?></span>
        <br>
        <span>Nombre: <?php echo "$row1[5] "; echo "$row1[6] ";echo "$row1[3] ";echo "$row1[4]";?></span>
        <br>
        <span>Carrera: <?php echo "$row1[2] "; ?></span>
        <br>
        <span>Telefono: <?php echo "$row1[7]"; ?></span>
        <br> 
        <span>Email: <?php echo "$row1[8]"; ?></span>
        <br> 
        <br>
        <br>              
    </div>
    <br>
    <a id="boton" href="confilib.php" class="center-block btn btn-primary btn-lg active" role="button">Confirmar compra</a>

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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</body>

</html>