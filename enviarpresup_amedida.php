<?php

$nombre_cliente=$_POST['nombre_cliente'];
$correo_cliente=$_POST['correo_cliente'];
$servicio_disenio=$_POST['disenio'];
$servicio_mantenimiento=$_POST['mantenimiento'];
$servicio_tienda=$_POST['tienda'];
$servicio_autoadmin=$_POST['autoadmin'];
$servicio_paginas=$_POST['paginas'];
$servicio_formulario=$_POST['formulario'];
$servicio_gal_img=$_POST['gal_img'];
$servicio_gal_videos=$_POST['gal_videos'];
$servicio_redes=$_POST['redes'];
$servicio_hyd=$_POST['hyd'];

include('conexion.php');

$presup_solicitado=mysqli_query($datos_conexion, "SELECT SUM(precio) AS total FROM servicios WHERE servicio='$servicio_disenio' OR servicio='$servicio_mantenimiento' OR servicio='$servicio_tienda' OR servicio='$servicio_autoadmin' OR servicio='$servicio_paginas' OR servicio='$servicio_formulario' OR servicio='$servicio_gal_img' OR servicio='$servicio_gal_videos' OR servicio='$servicio_redes' OR servicio='$servicio_hyd'");

$mostrar_presup=mysqli_fetch_array($presup_solicitado);

$presup_total=$mostrar_presup['total'];

mysqli_query($datos_conexion, "INSERT INTO presup_solicitado VALUES (0, '$nombre_cliente', '$correo_cliente', '$servicio_disenio', '$servicio_mantenimiento', '$servicio_tienda', '$servicio_autoadmin', '$servicio_paginas', '$servicio_formulario', '$servicio_gal_img', '$servicio_gal_videos', '$servicio_redes', '$servicio_hyd', $presup_total)"); 

header("location:index.php?presupuesto=solicitado#servicios");

?>