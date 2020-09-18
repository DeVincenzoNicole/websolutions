<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Web Solutions</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="estilos.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
</head>
<body>
	<section id="contenedor">
		<header>
				<h1>Web Solutions - Administrador de Noticias</h1>
		<nav id="botonera">
			<ul class="botonera_principal">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="cargar_datos.php">Cargar Noticias</a></li>
			<li><a href="modificar_datos.php">Modificar Noticias</a></li>
			<li><a href="eliminar_datos.php">Eliminar Noticias</a></li>
			<li><a href="salir.php">Salir</a></li>
		</ul>
</nav>
			</header>
	<section id="contenido">
		<section id="contenido_noticias">
				<h2>Administrador de Noticias</h2>
				<?php 
				if(@$_GET['i']=='no'){ ?>
				<h3>El usuario/clave es incorrecto.</h3>
				<?php
				}
				?>
			<form method="POST" action="ingresar_noticias.php">
        <p>Usuario: <input type="text" name="usuario_noticias" required autocomplete="off"/></p>
        <p>Clave: <input type="password" name="clave_noticias" required/></p>
        <input type="submit" value="Ingresar"/>
        </form>
		</section>
	</section>
	<footer>
				<div id="registro">
					<p>@2017 	Web Solutions</p>
				</div>
				<div id="desarrollador">
					<p>Desarrollado por Web Solutions</p>
				</div>
			</footer>

	</section>
</body>
</html>