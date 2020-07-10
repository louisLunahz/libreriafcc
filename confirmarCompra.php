<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/confistil.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


    <title>Inicio</title>
</head>

<body>
    <?php 
    session_start();
    include 'includes/navbar.php';
    ?>


    <?php 
    $id_libro=$_SESSION['libro'];
    $matricula=$_SESSION['matricula'];
    $carrera=$_SESSION['carrera'];
    $telefono=$_SESSION['telefono'];
    $email=$_SESSION['email'];
    $host="bwswyscfjeaxoy04miln-mysql.services.clever-cloud.com";
    $user="u9yr87t84v3djrd7";
    $password="DKMw2Jzok7cXWaEwZYlY";
    $database="bwswyscfjeaxoy04miln";
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
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>