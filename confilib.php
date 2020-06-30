<?php 
session_start();
$id_libro= $_SESSION['libro'];
	//conectarse a la base de datos
    $database="libreria";
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"libreria");
	$consultaUsuario="UPDATE libros SET status = '1' WHERE libros . id_libro = '$id_libro'";
	//$resultado= mysqli_query($link,$consultaUsuario);
    mysqli_select_db($link, $database);
        if ($result = mysqli_query($link, $consultaUsuario)) {
            echo "Correcto";
            header('Location: compra.php');
        }else{
            echo json_encode('error_3');
        }
?>
