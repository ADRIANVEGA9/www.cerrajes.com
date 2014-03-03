<!DOCTYPE html>
<?php $ac = 4; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="Permítenos conocer tus sugerencias, dudas e inquietudes sobre nuestros productos y servicios.">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> -->
<link rel="shortcut icon" href="favicon.ico">
<title>Cerrajes&reg; el herraje ideal para su mueble... - Contacto</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/prefixfree.min.js"></script>
<script src="js/validaForm.js"></script>
</head>
<body>
<?php require(".header.html") ?>
	<section id="menuProductos">
		<?php require("menu/.menu.php") ?>
	</section>
	<section id="contenedor">
		<?php require(".nav.php") ?>
		<section  id="contenido">
			<div class="tituloSeccion"><strong>Contacto</strong></div>	
			<section id="contacto">
				
				<?php if (!$_POST){ ?>
					<form id="contacto" method="post" onsubmit="return validate1(this)">
					<fieldset>
							<span class="mayus, gris">Permítenos conocer tus sugerencias, dudas e inquietudes sobre nuestros productos y servicios.</span><br><br>
						<section id="contactoEtiqueta">
							<label for="nombre">*Nombre</label>
							<label for="apellidos">*Apellidos</label>
							<label for="municipio">*Municipio</label>
							<label for="estado">*Estado</label>
							<label for="telefono">*Tel&eacutefono</label>
							<label for="correo">*Correo electr&oacutenico</label>
							<label for="empresa">Empresa</label>
							<label for="giro">Giro de la empresa</label>
							<label for="telOf">Tel&eacutefono oficina</label>
							<label for="web">Sitio web</label>
						</section>
						<section id="contactoCajas">
							<input type="text" name="nombre" id="nombre" placeholder="Nombre" required onkeypress="return validar(event)"></td>
							<input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required onkeypress="return validar(event)"></td>
							<input type="text" name="municipio" id="municipio" placeholder="Municipio" required onkeypress="return validar(event)"></td>
							<input type="text" name="estado" id="estado" placeholder="Estado" required onkeypress="return validar(event)"></td>
							<input type="tel" name="ladaT" id="ladaT" placeholder="Lada" required onkeypress="return validarNum(event)"></td>
							<input type="tel" name="telefono" id="telefono" placeholder="Tel&eacute;fono" required onkeypress="return validarNum(event)"></td>
							<input type="mail" name="correo" id="correo" placeholder="ejemplo@dominio.ext" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required ></td>
							<input type="text" name="empresa" id="empresa" placeholder="Empresa" onkeypress="return validarTxtNum(event)"></td>
							<input type="text" name="giro" id="giro" placeholder="Giro de la empresa" onkeypress="return validar(event)"></td>
							<input type="tel" name="ladaTOf" id="ladaTOf" placeholder="Lada" onkeypress="return validarNum(event)"></td>
							<input type="tel" name="telOf" id="telOf" placeholder="Tel&eacute;fono oficina" onkeypress="return validarNum(event)"></td>
							<input type="url" name="web" id="web" placeholder="http.//www.tusitio.com"></td>
						</section>
						<section id="contactoEnvia">
							<label for="mensaje">Comentarios</label>
							<textarea name="mensaje" id="mensaje" placeholder="déjanos tu comentario" required onkeyup="Textarea_Sin_Enter(event.keyCode, this.id);" onkeypress="Textarea_Sin_Enter(event.keyCode, this.id);return validarTxtNum(event)"></textarea>
							<span>Tus datos ser&aacute;n de uso confidencial y nos ayudarán a responder de manera adecuada tus comentarios.<input name="Enviar" type="submit" class="botonEnvia" id="button" value="ENVIAR"/> </span>
						</section>

					</fieldset>
					</form>
					<?php }
						else 
							{ 
								require_once(".contacto.php");
						 	}//fin else?>

	</section>
	<?php require(".footer.php") ?>
</body>
</html>	