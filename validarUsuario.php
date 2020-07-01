<?php 
$correo = $_POST['email']; 
$password = $_POST['pass'];


if (trim($correo) === '' || trim($password) === '') {
	echo json_encode('error_1');
} else {
	session_start();
	//conectarse a la base de datos
	$link=mysqli_connect("bwswyscfjeaxoy04miln-mysql.services.clever-cloud.com","u9yr87t84v3djrd7","DKMw2Jzok7cXWaEwZYlY");
	mysqli_select_db($link,"bwswyscfjeaxoy04miln");
	$consultaUsuario=" SELECT * from usuarios where email='$correo' AND password='$password'";
	$resultado= mysqli_query($link,$consultaUsuario);
	if($row=mysqli_fetch_array($resultado)){
		//Variables de sesion
		$_SESSION['id_usuario'] = $row['id_usuario'];
		$_SESSION['nombre'] = $row['nombre'];
		$_SESSION['apellidoP'] = $row['apellidoP'];
		$_SESSION['apellidoM'] = $row['apellidoM'];
		$_SESSION['segundoNombre'] = $row['segundoNombre'];
		$_SESSION['telefono'] = $row['telefono'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['matricula'] = $row['matricula'];
		$_SESSION['carrera'] = $row['carrera'];
		echo json_encode('correcto');


	}
	else{
		echo json_encode('error_2');
	}
}


?>