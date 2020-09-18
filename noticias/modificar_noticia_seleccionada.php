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
				<?php if(isset($_SESSION['admin'])) {	?>
				<h2>Administrador de Noticias</h2>
				<h3>Modificar noticias</h3>
				
				<?php
				include('../conexion.php');
				 
				$id_noticia=$_POST['noticias']; 
				$buscar_noticia=mysqli_query($datos_conexion, "SELECT * FROM noticias WHERE id_noticia=$id_noticia");
				$mostrar_noticia=mysqli_fetch_array($buscar_noticia); ?>
					
				<form method="POST" action="modificar_noticia.php" enctype="multipart/form-data">
				<ul>
					<li>Título: <input type="text" name="titulo_noticia" required value="<?php echo $mostrar_noticia['titulo_noticia']; ?>"></li>
					<li>Descripción: <textarea name="descripcion_noticia" rows=4 style="width: 800px;">
						<?php echo $mostrar_noticia['descripcion_noticia'];?>
					</textarea></li>
					<li id="modificar_imagen"><img src="../imagen_noticia.php?id_noticia=<?php echo $mostrar_noticia['id_noticia'];?>"></li>
					<li>Imagen: <input type="file" name="imagen_noticia"></li>
					<li>
						<input type="hidden" name="id_noticia" value="<?php echo $mostrar_noticia['id_noticia']; ?>"> <!--oculto-->
						<input type="submit" value="Cargar noticia"></li>
				</ul>
				</form>

				<?php
			} else {
				header("Location:index.php");
			}
				?>
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