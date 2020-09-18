<section>
			<div class="caja_titulo">
					<h2>Contactanos</h2>
			</div>
			<div class="lateral_izq">
				<p>TAMBIÉN PODES COMUNICARTE</p>
				<p>CON NOSOTROS POR WHATSAPP!</p>
				<p>+541134874998</p>
			</div>
			<div class="lateral_der">
				<h3>CONTACTANOS!</h3>
				<?php if(isset($_GET['mje'])) {
								if($_GET['mje']=='enviado') { ?>
								<h2> Tu mensaje fue enviado! Nos contactaremos a la brevedad. </h2>
								<?php } } else { ?>
				<form method="POST" action="enviar_datos.php">
						<ul>
							<li><input type="text" name="nombre" maxlength="30" placeholder="Nombre" required></li>
							<li><input type="text" name="apellido" maxlength="40" placeholder="Apellido" required></li>
							<li><input type="E-mail" name="correo" placeholder="E-mail" required></li>
							<li><input type="number" name="telefono" placeholder="Teléfono"  maxlength="15"></li>
							<li><select name="motivo">
								<option value="Presupuesto Básico">Presupuesto Básico</option>
								<option value="Presupuesto Avanzado">Presupuesto Avanzado</option>
								<option value="Consulta" checked="checked">Consulta</option>
							</select></li>
							<li><textarea name="mensaje" rows="5" placeholder="Deje su mensaje..." ></textarea></li>
							<li><input type="submit" value="ENVIAR CONSULTA"></li> 
						</ul> 
				</form> 
				<?php } ?>
			</div>
			</section>
			<footer id="pie">
				<div id="redes">
			<a href="http://www.Facebook.com" target="new"><img src="imagenes/boton-facebook.png" alt="Facebook"></a><a href="http://www.twitter.com" target="new"><img src="imagenes/boton_twitter.png" alt="Twitter"></a>
				</div>
			<div id="legales">
			<p>  @2017 Web Solutions</p>
			</div>
			<div id="datos_contacto">
				<p> <a href="mailto:websolutions@gmail.com">websolutions@gmail.com</a> // <a href="https://goo.gl/maps/educSPAVDwQ2" target="new"> Av. Directorio 2710 - CABA</a> // <a href="tel:+541134874998">1534874998</a></p>
			</div>		
	</footer>