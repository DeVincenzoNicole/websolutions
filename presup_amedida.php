
<form method="POST" action="enviarpresup_amedida.php">
		<ul>
			<div id="col-1">
			<li>ME INTERESA:</li>
			<br><br>
			<li>Diseño Web:</li>
			<li><input type="radio" name="disenio" value="disenio_si" checked="checked"> Si</li> 
			<li><input type="radio" name="disenio" value="disenio_no"> No</li><br>
			<li>Mantenimiento:</li>
			<li><input type="radio" name="mantenimiento" value="mantenimiento_si" checked="checked"> Si</li>
			<li><input type="radio" name="mantenimiento" value="mantenimiento_no"> No</li><br>
			<li>E-Commerce / Tienda Online:</li>
			<li><input type="radio" name="tienda" value="tienda_si"> Si</li>
			<li><input type="radio" name="tienda" value="tienda_no" checked="checked"> No</li>
			<br>
			<li>Autoadministrable:</li>
			<li><input type="radio" name="autoadmin" value="autoadm_si"> Si </li>
			<li><input type="radio" name="autoadmin" value="autoadm_no"  checked="checked"> No </li>
			</div>
			<div id="col-2">
				<li>OTROS:</li>
			<br><br>
			<li>Formulario de contacto:</li>
			<li><input type="radio" name="formulario" value="formulario_si"  checked="checked">Si </li>
			<li><input type="radio" name="formulario" value="formulario_no">No </li><br>
			<li>Galería de imágenes:</li>
			<li><input type="radio" name="gal_img" value="galimg_si" checked="checked">Si</li>
			<li><input type="radio" name="gal_img" value="galimg_no">No</li><br>
			<li>Galería de videos:</li>
			<li><input type="radio" name="gal_videos" value="galvideos_si">Si</li>
			<li><input type="radio" name="gal_videos" value="galvideos_no" checked="checked">No</li><br>
			<li>Número de páginas:</li>
			<li><select name="paginas">
			<option value="onepage">OnePage</option>
			<option value="pag_4a6">Inicio + 4 a 6 internas</option>
			<option value="pag_7a10">Inicio + 7 a 10 internas</option>
			<option value="pag_10a15">Inicio + 10 a 15 internas</option>
			<option value="pag_15">15 o más...</option>
			</select></li>
		</div>
		<div id="col-3">
			<li>Vinculación a Redes Sociales:</li>
			<li><input type="radio" name="redes" value="redes_si" checked="checked">Si</li>
			<li><input type="radio" name="redes" value="redes_no">No</li>
			<br>
			<li>Servicio de Hosting y dominio:</li>
			<li><input type="radio" name="hyd" value="hosting_si"  checked="checked">Si</li>
			<li><input type="radio" name="hyd" value="hosting_no">No</li>
		</div>
		<div id="col-4">
			<li>Nombre:</li>
			<li><input type="text" name="nombre_cliente" required="required" size="25"></li>
			<li>Correo:</li>
			<li><input type="E-mail" name="correo_cliente" required="required" size="25"></li>
			<br>
			<li><input type="submit" value="Solicitar presupuesto"></input></li>
		</div>
	 </ul>
	</form>
<div id="regresar">
	<a href="index.php#servicios">Volver</a>
</div>