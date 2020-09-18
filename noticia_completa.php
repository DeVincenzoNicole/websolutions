<?php

include('conexion.php');

$id_noticia=$_GET['id_noticia'];

$consultar_noticia_completa=mysqli_query($datos_conexion, "SELECT id_noticia, titulo_noticia, descripcion_noticia FROM noticias WHERE id_noticia=$id_noticia");

$mostrar_noticia_completa=mysqli_fetch_array($consultar_noticia_completa); ?>

<h3> <?php echo $mostrar_noticia_completa['titulo_noticia']; ?></h3>
<img id="imagen_completa" src="imagen_noticia.php?id_noticia=<?php echo $mostrar_noticia_completa['id_noticia']; ?>#noticias"></div>
<p><?php echo $mostrar_noticia_completa['descripcion_noticia']; ?> </p>

