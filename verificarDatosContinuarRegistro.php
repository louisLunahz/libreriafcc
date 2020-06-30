<?php 

//primero verificaremos los apellidos y los nombres
session_start();
$matricula=$_SESSION['matriculaRegistro'];
$email=$_SESSION['emailRegistro'];
$password=$_SESSION['contraseniaRegistro'];
$apellidoP=$_POST['apellidoP'];
$apellidoM=$_POST['apellidoM'];
$nombreUno=$_POST['nombreUno'];
$nombreDos=$_POST['nombreDos'];
$carrera=$_POST['carrera'];
$telefono=$_POST['telefono'];
$host="localhost";
$user="root";
$passwordDB="";
$database="libreria";
$link=mysqli_connect($host,$user,$passwordDB);
mysqli_select_db($link, $database);


if(!verificarCadena($apellidoP)){
	echo json_encode("error_1");
}else if(!verificarCadena($apellidoM)){
	echo json_encode("error_2");
}else if(!verificarCadena($nombreUno)){
	echo json_encode("error_3");
}else if(!preg_match("/^[a-zA-Z]*$/",$nombreDos)){
	echo json_encode("error_4");
}else if(!validarTelefono($telefono)){
	echo json_encode("error_5");
}else{
	$insertaUsuario="INSERT INTO `usuarios` (`id_usuario`, `matricula`, `carrera`, `apellidoP`, `apellidoM`, `nombre`, `segundoNombre`, `telefono`, `email`, `password`) VALUES (NULL, '$matricula', '$carrera', '$apellidoP', '$apellidoM', '$nombreUno', '$nombreDos', '$telefono', '$email', '$password');";
	if($result = mysqli_query($link, $insertaUsuario)){
		 session_destroy(); 
		echo json_encode("correcto");
	}else{
		echo json_encode("error_6");
	} 


	



}


function verificarCadena($cadena){
	if (!preg_match("/^[a-zA-Z]*$/",$cadena) || strlen($cadena)<3){
		return false;
	}
	return true;
	
}

function validarTelefono($telefono){
	if (is_numeric($telefono) && strlen($telefono)==10) {
		return true;
	}
	return false;
}




?>