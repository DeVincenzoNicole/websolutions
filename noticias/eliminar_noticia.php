<?php
session_start();

include('../conexion.php');

$id_noticia=$_GET['id_noticia'];

mysqli_query($datos_conexion, "DELETE FROM noticias WHERE id_noticia=$id_noticia");

header("location: ../index.php?sec=noticias");

?>