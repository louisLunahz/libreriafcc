<?php 

session_start();
$id_usuario=$_SESSION['id_usuario'];
$id_libro=$_SESSION['id_libro_editar'];
$nombreLibro=$_POST['inputnameLibro'];
$costo=$_POST['inputPrecioLibro'];
$descripcion=$_POST['descripcionArea'];

$host="localhost";
$user="root";
$password="";
$database="libreria";
$link=mysqli_connect($host,$user,$password);
mysqli_select_db($link, $database);
$obtenerLibro="select ruta_imagen, estado_actual, Area from libros where id_libro=$id_libro";
  
if (!$result = mysqli_query($link, $obtenerLibro)) {
    echo json_encode("error_1");


}else{
        //  echo "Returned rows are: " . mysqli_num_rows($result);
     $row=mysqli_fetch_array($result);
     $ruta_imagen=$row[0];
     $estado_actual=$row[1]; 
     $area=$row[2];
     if(isset($_POST['categoriasSelector'])){
        $area=$_POST['categoriasSelector'];
        //echo "$area";
    }
    if(isset($_POST['condicionSelector'])){
        $estado_actual=$_POST['condicionSelector'];
       // echo "$estado_actual";
    }
    if(isset($_FILES['fotoLibro']['name'])){
       $foto=$_FILES['fotoLibro']['name'];
       if(strlen($foto)){
          $ruta_imagen="libros/".$foto;  
        }
      // echo "$ruta_imagen";
    }

    if (trim($nombreLibro) === '' || trim($area) === '' || trim($costo)=='' || trim($estado_actual)=='' || trim($descripcion)=='' || trim($ruta_imagen)=='') {
        echo json_encode("error_2");
    }else if(!is_numeric($costo) || $costo<0){ //si costo no es un numero o no es positivo
        echo json_encode("error_3"); //Error! El costo no es correcto, asegurate de que no sea un valor negativo
    }else{
         $insertaLibro="UPDATE `libros` SET `nombre` = '$nombreLibro', `area` = '$area', `Descripcion` = '$descripcion', `costo` = '$costo', `ruta_imagen` = '$ruta_imagen', `estado_actual` = '$estado_actual' WHERE `libros`.`id_libro` = $id_libro;";
        if($ruta_imagen==$row[0]){
            if (!$result = mysqli_query($link, $insertaLibro)) {
            echo json_encode("error_4"); //error al insertar en la base de datos
            }else{
                echo json_encode("correcto");
            }

        }else{
            $imagenBorrar=$row[0];
            copy($_FILES['fotoLibro']['tmp_name'],$ruta_imagen);
            unlink($imagenBorrar);
            if (!$result = mysqli_query($link, $insertaLibro)) {
            echo json_encode("error_4"); //error al insertar en la base de datos
            }else{
                echo json_encode("correcto");//error al insertar en la base de datos
            }


        }

    }




}












?>