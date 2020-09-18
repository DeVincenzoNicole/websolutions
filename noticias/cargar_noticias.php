<?php
session_start();

$titulo_noticia=$_POST['titulo_noticia'];
$descripcion_noticia=$_POST['descripcion_noticia'];
$foto_name= $_FILES['imagen_noticia']['name'];
$foto_size= $_FILES['imagen_noticia']['size'];
$foto_type= $_FILES['imagen_noticia']['type'];
$foto_temporal= $_FILES['imagen_noticia']['tmp_name'];

$lim_tamano= 400000;
	

if ($foto_type=="image/x-png" || $foto_type=="image/png") {
$extension="image/png";
 }

if ($foto_type=="image/pjpeg" || $foto_type=="image/jpeg") {
 $extension="image/jpeg";
 }

if ($foto_type=="image/gif") {
$extension="image/gif";
 }
 

if ($foto_name !='' && $foto_size != 0 &&  $foto_size<=$lim_tamano && $extension !='') {
 
$f1= fopen($foto_temporal,"rb");
$foto_reconvertida = fread($f1, $foto_size);
$foto_reconvertida=addslashes($foto_reconvertida);
	
include('../conexion.php');

mysqli_query($datos_conexion, "INSERT INTO noticias VALUES (0,'$titulo_noticia','$descripcion_noticia','$foto_reconvertida','$extension')");
	
mysqli_close($datos_conexion);

header("Location:index.php");

}

?>