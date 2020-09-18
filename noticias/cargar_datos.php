<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Web Solutions</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="estilos.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
		<script type="text/javascript" src="js/nicEdit.js"></script>
		<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	</head>
	<body>
	<section id="contenedor">
		<header>
				<h1>Web Solutions</h1>
	<nav id="botonera">
			<ul class="botonera_principal">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="cargar_datos.php">Cargar Noticia</a></li>
			<li><a href="modificar_datos.php">Modificar Noticia</a></li>
			<li><a href="eliminar_datos.php">Eliminar Noticia</a></li>
			<li><a href="salir.php">Salir</a></li>
		</ul>
	</nav>
			</header>
	<section id="contenido">
		<section id="contenido_noticias">
			<?php if(isset($_SESSION['admin'])) { ?>
				<h2>Administrador de Noticias</h2>	
				<h3>Cargar Noticias</h3>

		<form method="POST" action="cargar_noticias.php" enctype="multipart/form-data">
				<ul>
					<li>Título: <input type="text" name="titulo_noticia" required<></li>
					<li>Descripción: <textarea name="descripcion_noticia" rows="7" style="width: 800px;"></textarea></li>
					<li>Imagen: <input type="file" name="imagen_noticia"></li>
					<li><input type="submit" value="Cargar noticia">
				</ul>
				</form>
				<?php } else { header("Location:index.php"); }?>
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
