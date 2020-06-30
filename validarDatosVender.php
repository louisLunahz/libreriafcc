<?php 

session_start();
$id_usuario=$_SESSION['id_usuario'];
//echo $id_usuario;

$nombreLibro=$_POST['inputnameLibro'];
$area=$_POST['categoriasSelector'];
$costo=$_POST['inputPrecioLibro'];
$condicion=$_POST['condicionSelector'];
$descripcion=$_POST['descripcionArea'];
$foto=$_FILES['fotoLibro']['name'];



//si los campos estan vacios
if (trim($nombreLibro) === '' || trim($area) === '' || trim($costo)=='' || trim($condicion)=='' || trim($descripcion)=='' || trim($foto)=='') {
	echo json_encode('error_1'); // error! LLena todos los campos
}else if(!is_numeric($costo) || $costo<0){ //si costo no es un numero o no es positivo
    echo json_encode('error_2'); //Error! El costo no es correcto, asegurate de que no sea un valor negativo
}else{ 
    
    $rutaImagen="libros/".$foto;  
   // echo "ruta de imagen= $rutaImagen";
    copy($_FILES['fotoLibro']['tmp_name'],$rutaImagen);
    $host="localhost";
			$user="root";
			$password="";
			$database="libreria";
        $insertaLibro="INSERT INTO `libros` (`id_libro`, `nombre`, `Area`, `Descripcion`, `costo`, `ruta_imagen`, `estado_actual`, `propietario`, `status`) VALUES (NULL, '$nombreLibro', '$area', '$descripcion', '$costo', '$rutaImagen', '$condicion', '$id_usuario', '0' );";//insertar libro en la tabla libros
        $link=mysqli_connect($host,$user,$password);
        mysqli_select_db($link, $database);
        if ($result = mysqli_query($link, $insertaLibro)) {
            echo json_encode('correcto');
        }else{
            echo json_encode('error_3');
        }
        
}


?>