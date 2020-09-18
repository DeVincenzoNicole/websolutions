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
				include('../conexion.php');

				$consultar_noticias= mysqli_query($datos_conexion, "SELECT id_noticia, titulo_noticia FROM noticias");
				?>

				<form method="POST" action="eliminar_noticia_seleccionada.php">
					<select name="noticias">
						
						<?php 
						while($listar_noticias=mysqli_fetch_row($consultar_noticias)) { ?>
						<option value="<?php echo $listar_noticias[0];?>"><?php echo $listar_noticias[1]; ?></option>	
						<?php } ?>
						<input type="submit" value="Eliminar noticia">

					</select>

				</form>

				
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