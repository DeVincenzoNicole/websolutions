<?php session_start(); ?>
<!doctype html>
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
					<?php
				if(isset($_SESSION['admin'])) {
				?>
				<h2>Administrador de Noticias</h2>
				<h3>Eliminar noticias</h3>

				<?php

				$id_noticia=$_POST['noticias'];


				include('../conexion.php');

				/*trae todos los datos de la noticia que corresponde al id seleccionado*/
				$consultar_noticias= mysqli_query($datos_conexion, "SELECT * FROM noticias WHERE id_noticia=$id_noticia");
				$mostrar_noticia=mysqli_fetch_array($consultar_noticias);

				?>

				<ul>
					<li><?php echo $mostrar_noticia['titulo_noticia']; ?></li>
					<li><?php echo $mostrar_noticia['descripcion_noticia']; ?></li>
					<li><img src="../imagen_noticia.php?id=<?php echo $mostrar_noticia['id_noticia'];?>"></li>
					<li>¿Está seguro que quiere borrar esta noticia? <a href="eliminar_noticia.php?id=<?php echo $mostrar_noticia['id_noticia'];?>">SI</a> <a href="eliminar_datos.php">NO</a></li>




				<?php
			} else {
				header("Location:index.php");
			} ?>
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