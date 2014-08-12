<!DOCTYPE html>
<?php $ac = 8; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> -->
<link rel="shortcut icon" href="favicon.ico">
<title>Cerrajes&reg; el herraje ideal para su mueble... - Catálogos</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/prefixfree.min.js"></script>
</head>
<body>
<?php require(".header.html") ?>
	<section id="menuProductos">
		<?php 
			require("menu/.menu.php");
			require(".registro.php") ?>
	</section>
	<section id="contenedor">
		<?php require(".nav.php") ?>
		<section  id="contenido">
			<div class="tituloDescargas">DESCARGAS</div>	
			<section id="descargasDatos" class="descargas">	
				<?php if (@!$_POST['nombreD']){ ?><!-- @ SE USA PARA EVITAR QUE MANDE LOS ERRORES 'NOTICE' DE PHP -->
					<section id="formDescargas">
							<div id="tituloD">Registra tus datos y descarga de manera gratuita nuestros catálogos.</div>
						<form id="descargasForm" method="post">		

						<section id="descargasEtiquetas">
							<label for="nombreD">nombre:</label>
							<label for="correoD">correo:</label>
							<label for="ciudadD">ciudad:</label>
							<label for="estadoD">estado:</label>
						</section>

						<section id="descargasCajas">
							<input type="text" name="nombreD" id="nombreD" placeholder="nombre completo" required/>
							<input type="mail" name="correoD" id="correoD" placeholder="ejemplo@dominio.ext" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
							<input type="text" name="ciudadD" id="ciudadD" placeholder="ciudad" required />
							<input type="text" name="estadoD" id="estadoD" placeholder="estado" required />
						</section>

						<section class="descargasTexto">Dirigido a:</section>
						<section id="descargasRadio">
							<input name="dirigidoD" type="radio" id="dirigidoD_0" form="descargasForm" tabindex="5" value="Particular" checked required="">
								<label for="dirigidoD_0">Particular</label>
							<input name="dirigidoD" type="radio" id="dirigidoD_1" form="descargasForm" tabindex="6" value="Distribuidor"  required="">
								<label for="dirigidoD_1">Distribuidor</label>
							<input name="dirigidoD" type="radio" id="dirigidoD_2" form="descargasForm" tabindex="9" value="Arquitecto"  required="">
								<label for="dirigidoD_2">Arquitecto</label>
							<input name="dirigidoD" type="radio" id="dirigidoD_3" form="descargasForm" tabindex="7" value="Constructor"  required="">
								<label for="dirigidoD_3">Constructor</label>
							<input name="dirigidoD" type="radio" id="dirigidoD_4" form="descargasForm" tabindex="8" value="Diseñador"  required="">
								<label for="dirigidoD_4">Diseñador</label>
							<input name="dirigidoD" type="radio" id="dirigidoD_5" form="descargasForm" tabindex="9" value="Instalador"  required="">
								<label for="dirigidoD_5">Instalador</label>
						</section>

						<section class="descargasTexto">Descargar Catálogo(s):</section>
						<section id="descargasCheck">
							<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_0" form="descargasForm" tabindex="15" value="catalogo/elite.pdf">
					    		<label for="descargaCatalogo_0">Accesorios para clóset Elite</label>
							<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_1" form="descargasForm" tabindex="16" value="catalogo/comercial.pdf">
					    		<label for="descargaCatalogo_1">Comercial</label>
							<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_2" form="descargasForm" tabindex="17" value="catalogo/futura.pdf">
					    		<label for="descargaCatalogo_2">Correderas Futura y unica</label>
							<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_3" form="descargasForm" tabindex="18" value="catalogo/impaz.pdf">
					    		<label for="descargaCatalogo_3">Corredera Impaz</label>
							<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_4" form="descargasForm" tabindex="19" value="catalogo/prime.pdf">
					    		<label for="descargaCatalogo_4">Corredera Prime</label>
							<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_5" form="descargasForm" tabindex="20" value="catalogo/ten.pdf">
					    		<label for="descargaCatalogo_5">Corredera TEN</label>
							<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_6" form="descargasForm" tabindex="21" value="catalogo/triomax.pdf">
					    		<label for="descargaCatalogo_6">Corredera Triomax</label>
							<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_7" form="descargasForm" tabindex="22" value="catalogo/T5.pdf">
					    		<label for="descargaCatalogo_7">Corredera Triomax T5</label>
							<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_8" form="descargasForm" tabindex="23" value="catalogo/industrial.pdf">
					    		<label for="descargaCatalogo_8">Industrial</label>
							<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_9" form="descargasForm" tabindex="24" value="catalogo/Shine.pdf">
					    		<label for="descargaCatalogo_9">Shine</label>
							<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_10" form="descargasForm" tabindex="25" value="catalogo/levadizos_salice.pdf">
					    		<label for="descargaCatalogo_10">Sistemas levadizos Salice</label>
							<input name="descargaCatalogo[]" type="checkbox" id="descargaCatalogo_11" form="descargasForm" tabindex="26" value="catalogo/vauth-sagel.pdf">
					    		<label for="descargaCatalogo_11">Vauth Sagel 2014</label>
						</section>

						
						<button type="submit" class="btn btn-default">DESCARGA GRATIS</button>
						<input type="hidden" name="registroH" value="a" />

						</form>
					</section>
				<?php }
				elseif (isset($_POST['nombreD']))
				{ 
					require_once("_descarga.php");
			 	}//fin else?>

				<section id="imgDescargas">
					<img src="imagenesSitio/catalogos/_descarga.jpg" alt="">
				</section>
				<section id="footerDescargas">Tus datos no se usarán con otros fines. <a href="privacidad.php" target="_blank" title="ver aviso de privacidad">AVISO DE PRIVACIDAD</a></section>
				
				
			</section>
		</section>


	</section>
	<?php require(".footer.php") ?>
</body>
</html>	