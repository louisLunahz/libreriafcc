<?php 
session_start();
$matricula=$_POST['matricula'];
$email=$_POST['email'];
$password=$_POST['password'];




$claveCorrecta=validar_clave($password);

if(!verificarMatricula($matricula)) {
		echo json_encode("error_1");
}else if (!verificarEmail($email)) {
		echo json_encode("error_2");
}else if($claveCorrecta!=1){
		echo json_encode("error_3");
}else{
$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"libreria");
	$consultaEmail=" SELECT * from usuarios where email='$email'";
	$consultaMatricula=" SELECT * from usuarios where matricula='$matricula'";
	//echo "$consultaEmail";
	//echo "$consultaMatricula";
	if ($resultadoConsultaEmail = mysqli_query($link, $consultaEmail)) {
		$emailEnUso=mysqli_num_rows($resultadoConsultaEmail);
  		 mysqli_free_result($resultadoConsultaEmail);
	}
	if ($resultadoConsultaMatricula=mysqli_query($link, $consultaMatricula)) {
		$matriculaEnUso=mysqli_num_rows($resultadoConsultaMatricula);
	 mysqli_free_result($resultadoConsultaMatricula);
	}
	if($matriculaEnUso){
		echo json_encode("error_4");
	}else if($emailEnUso){
		echo json_encode("error_5");
	}
	else{
		$_SESSION['matriculaRegistro']=$matricula;
		$_SESSION['emailRegistro']=$email;
		$_SESSION['contraseniaRegistro']=$password;

		echo json_encode("correcto");
	}
}






function verificarMatricula($matricula)
{
	if (is_numeric($matricula) and strlen($matricula)==9 ) {
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

function validar_clave($password){
   if(strlen($password) < 6){
    
      return 3;
   }
   if(strlen($password) > 16){
      
      return 2;
   }
   
   return 1;
}

?>