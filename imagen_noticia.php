<?php

include('conexion.php');

$id_noticia=$_GET['id_noticia'];

$consultar_imagen=mysqli_query($datos_conexion, "SELECT imagen_noticia, extension_noticia FROM noticias WHERE id_noticia=$id_noticia");

$mostrar_imagen=mysqli_fetch_row($consultar_imagen);

header("content-type: $mostrar_imagen[1]"); 

echo $mostrar_imagen[0];


?>