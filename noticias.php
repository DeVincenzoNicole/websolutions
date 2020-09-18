    <div class="caja_titulo">
    <h2>Noticias</h2>
    </div>
    
    <?php 

    include ('conexion.php');

    $consultar_noticias=mysqli_query($datos_conexion, "SELECT id_noticia, titulo_noticia FROM noticias");


                if(isset($_GET['id_noticia'])) { ?>
                        <div id="noticia_completa">
                       <?php include('noticia_completa.php'); ?>
                       <br><br>
                       <p><a href="index.php#noticias">Volver</a></p>
                       </div>
                <?php } else {

    while($mostrar_noticias=mysqli_fetch_array($consultar_noticias)) { ?>
	
	<a href="index.php?id_noticia=<?php echo $mostrar_noticias['id_noticia'];?>#noticias">

    	<div class="resumen_noticias">
    	<h3><?php echo $mostrar_noticias['titulo_noticia']; ?></h3>
		<img src="imagen_noticia.php?id_noticia=<?php echo $mostrar_noticias['id_noticia'];?>#noticias"/> 
	</div>
	</a>
	<?php
    } /*fin while*/
    } /*fin else*/
    ?>

