<?php 
session_start();
$id_libro= $_SESSION['libro'];
	//conectarse a la base de datos
    $database="bwswyscfjeaxoy04miln";
	$link=mysqli_connect("bwswyscfjeaxoy04miln-mysql.services.clever-cloud.com","u9yr87t84v3djrd7","DKMw2Jzok7cXWaEwZYlY");
	mysqli_select_db($link,$database);
	$consultaUsuario="UPDATE libros SET status = '1' WHERE libros . id_libro = '$id_libro'";
	//$resultado= mysqli_query($link,$consultaUsuario);
        if ($result = mysqli_query($link, $consultaUsuario)) {
            echo "Correcto";
            header('Location: compra.php');
        }else{
            echo json_encode('error_3');
        }
?>
