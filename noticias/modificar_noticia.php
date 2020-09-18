<?php
session_start();

$modificar_titulo=$_POST['titulo_noticia'];
$modificar_descripcion=$_POST['descripcion_noticia'];
$modificar_id=$_POST['id_noticia'];


include('../conexion.php');

mysqli_query($datos_conexion, "UPDATE noticias SET titulo_noticia='$modificar_titulo' WHERE id_noticia=$modificar_id");

mysqli_query($datos_conexion, "UPDATE noticias SET descripcion_noticia='$modificar_descripcion' WHERE id_noticia=$modificar_id");

if($_FILES['imagen_noticia']['size']!=0) /*si es distinto a cero es que se genero una imagen nueva*/ {

$foto_name= $_FILES['imagen_noticia']['name'];
$foto_size= $_FILES['imagen_noticia']['size'];
$foto_type=  $_FILES['imagen_noticia']['type'];
$foto_temporal= $_FILES['imagen_noticia']['tmp_name'];
$lim_tamano= 200000;

/*valida la extension de la imagen*/
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

/*convierte la imagen a codigo para la base de datos*/
$f1= fopen($foto_temporal,"rb"); 
$foto_reconvertida= fread($f1, $foto_size);
$foto_reconvertida=addslashes($foto_reconvertida);

mysqli_query($datos_conexion, "UPDATE noticias SET imagen_noticia='$foto_reconvertida' WHERE id_noticia=$modificar_id");

mysqli_query($datos_conexion, "UPDATE noticias SET extension_noticia='$extension' WHERE id_noticia=$modificar_id");

}
}

header("location: ../index.php#noticias");

?>