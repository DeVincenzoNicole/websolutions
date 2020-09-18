	<?php

			if(isset($_GET['presup'])) {
			if($_GET['presup']=='amedida') { ?>

				<div id="presupuesto_amedida">
				<p><?php include('presup_amedida.php'); ?> </p>
				</div>
				
		<?php	} }
				 else { ?>
					<div class="caja_titulo">
				<h2>Nuestros Servicios</h2>
		</div>
		<div class="caja_promo">
			<br>
			<h2>Básico</h2>
			<ul>
				<li>Hasta 3 interiores</li>
				<li>Diseño Responsive</li>
				<li>Galería de fotos (Hasta 15 imagenes)</li>
				<li>Soporte 24x7</li>
				<li>Registro de dominio</li>
			</ul>
			<br>
			<div class="boton_presup">
				<a href="#contactanos">Solicitar!</a>
			</div>
		</div>
		<div class="caja_promo">
			<br>
			<h2>Avanzado</h2>
			<ul>
				<li>Hasta 5 interiores</li>
				<li>Diseño Responsive</li>
				<li>Galería de fotos (Hasta 30 imagenes)</li>
				<li>Soporte 24x7</li>
				<li>Slider de noticias</li>
				<li>Formulario de contacto</li>
			</ul>
			
			<div class="boton_presup">
				<a href="#contactanos">Solicitar!</a>
			</div>
		</div>
		<div class="caja_promo" id="presup_amedida">
			 <?php if(isset($_GET['presupuesto'])) {
			if($_GET['presupuesto']=='solicitado') { ?>

				<h3> Su presupuesto fue solicitado. Nos pondremos en contacto a la brevedad!</h3>

		<?php	} }
				 else { ?>

			<br>
			<h2>Personalizado</h2>
			<br>
			<p>También podés solicitar tu</p><br>
			<div class="boton_presup"> 
				<a href="index.php?presup=amedida#servicios">PRESUPUESTO A MEDIDA</a>
			</div><br>
			<p>Completa el formulario y recibí el presupuesto en menos de 24hs!</p>
			<?php } ?>
		</div>
			<?php }  ?>
