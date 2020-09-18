<?php  

$nombre_form=$_POST['nombre'];
$apellido_form=$_POST['apellido'];
$correo_form=$_POST['correo'];
$tel_form=$_POST['telefono'];
$motivo_form=$_POST['motivo'];
$mensaje_form=$_POST['mensaje'];

$destinatario="devincenzo.nicole@hotmail.com";
$asunto="Consulta enviada desde Web Solutions - Motivo: " .$motivo_form;
$cuerpo="Nombre: ".$nombre_form."\r\n";
$cuerpo.="Apellido: ".$apellido_form."\r\n";
$cuerpo.="Correo: ".$correo_form."\r\n";
$cuerpo.="Teléfono: ".$tel_form."\r\n";
$cuerpo.="Mensaje: ".$mensaje_form;

$remitente="From: $nombre_form $apellido_form <$correo_form>";

/*mail($destinatario, $asunto, $cuerpo, $remitente);*/

/*ERROR:
Warning: mail(): Failed to connect to mailserver at "localhost" port 25, verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set() in C:\xampp\htdocs\Web_Solutions\enviar_datos.php on line 19*/

include('conexion.php');

mysqli_query($datos_conexion, "INSERT INTO mensajes VALUES ('$nombre_form','$apellido_form','$correo_form','$tel_form','$motivo_form', '$mensaje_form')");

mysqli_close($datos_conexion);

header("location:index.php?mje=enviado#contactanos");

?>