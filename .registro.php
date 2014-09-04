<script src="js/validaForm.js"></script>
<section id="registro">
	<div id="registroLogo">
		<img src="imagenesSitio/logo.png" alt="">
	</div>
	<div id="registroDatos">
		<?php if (@!$_POST['nombreR']){ ?><!-- @ SE USA PARA EVITAR QUE MANDE LOS ERRORES 'NOTICE' DE PHP -->
		<form id="registroForm" method="post">
			<fieldset>
				<div id="tituloR">Recibe información de nuestros productos y promociones.</div>
				<section id="registroEtiquetas">
					<label for="nombreR">nombre:</label>
					<label for="correoR">correo:</label>
					<label for="ciudadR">ciudad:</label>
					<label for="estadoR">estado:</label>
				</section>
				<section id="registroCajas">
					<input type="text" name="nombreR" id="nombreR" placeholder="nombre completo" required onkeypress="return validar(event)"/>
					<input type="mail" name="correoR" id="correoR" placeholder="ejemplo@dominio.ext" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+[a-zA-Z0-9-])*$" required>
					<input type="text" name="ciudadR" id="ciudadR" placeholder="ciudad" required onkeypress="return validar(event)"/>
					<input type="text" name="estadoR" id="estadoR" placeholder="estado" required onkeypress="return validar(event)"/>
				</section>
				<section id="registroTexto">Dirigido a:</section>
				<section id="registroRadio">
					<input name="dirigido" type="radio" id="dirigido_0" form="registroForm" tabindex="5" value="Particular" checked required="">
						<label for="dirigido_0">Particular</label>
					<input name="dirigido" type="radio" id="dirigido_1" form="registroForm" tabindex="6" value="Distribuidor"  required="">
						<label for="dirigido_1">Distribuidor</label>
					<input name="dirigido" type="radio" id="dirigido_2" form="registroForm" tabindex="9" value="Arquitecto"  required="">
						<label for="dirigido_2">Arquitecto</label>
					<input name="dirigido" type="radio" id="dirigido_3" form="registroForm" tabindex="7" value="Constructor"  required="">
						<label for="dirigido_3">Constructor</label>
					<input name="dirigido" type="radio" id="dirigido_4" form="registroForm" tabindex="8" value="Diseñador"  required="">
						<label for="dirigido_4">Diseñador</label>
					<input name="dirigido" type="radio" id="dirigido_5" form="registroForm" tabindex="9" value="Instalador"  required="">
						<label for="dirigido_5">Instalador</label>
				</section>
				<button type="submit" class="btn btn-default">REGISTRATE GRATIS</button>
				<input type="hidden" name="registroH" value="a" />
				<input type="hidden" name="opcion" value="2"></input>
			</fieldset>
		</form>
		<?php }
			elseif (isset($_POST['nombreR']))
				{ 
					require_once("_registro.php");
			 	}//fin else?>
	</div>
</section>