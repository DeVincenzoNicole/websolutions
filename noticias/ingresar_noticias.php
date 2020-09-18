<?php
session_start();
$usuario_noticias=$_POST['usuario_noticias'];
$clave_noticias=$_POST['clave_noticias'];

if($usuario_noticias=='websolutions' && $clave_noticias=='admnoticias') {
	$_SESSION['admin']=$usuario_noticias;
	header("Location:cargar_datos.php");
} else {
	header("Location:index.php?i=no");
}
?>