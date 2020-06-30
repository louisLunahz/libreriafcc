<?php 
session_start();
$matricula=$_POST['matricula'];
$carrera=$_POST['carrera'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];



//primero verificamos que los campos no esten vacios
if (trim($matricula)==='' || trim($carrera)==='' || trim($telefono)==='' || trim($email)==='') {
	echo json_encode('error_1');

}else if(!verificarMatricula($matricula)){
	echo json_encode('error_2');
}else if (!verificarTelefono($telefono)) {
	echo json_encode('error_3');
}else if (!verificarEmail($email)) {
	echo json_encode('error_4');
}else{
	$_SESSION['matricula']=$matricula;
	$_SESSION['carrera']=$carrera;
	$_SESSION['telefono']=$telefono;
	$_SESSION['email']=$email;
	echo json_encode('correcto');
}




function verificarMatricula($matricula)
{
	if (is_numeric($matricula) and strlen($matricula)==9) {
		return true;
	}else{
		return false;
	}

}

function verificarTelefono($telefono){
	if(is_numeric($telefono) and strlen($telefono)==10){
		return true;
	}else{
		return false;
	}
}

function verificarEmail($email){
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	}else{
		return false;
	}
}

?>
