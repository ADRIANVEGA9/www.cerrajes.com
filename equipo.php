<!DOCTYPE html>
<?php $ac = 6; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> -->
<link rel="shortcut icon" href="favicon.ico">
<title>Cerrajes&reg; el herraje ideal para su mueble... - Forma parte del equipo</title>
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
			<div class="tituloSeccion"><strong>Forma parte del equipo</strong></div>	
			<section id="equipo">
			<?php if (!$_POST){ ?>
				<span>
					La empresa te invita a integrarte con nosotros. <br> Si deseas pertenecer a esta gran familia, ingresa los siguientes datos:
				</span>
					<form id="equipoForm" method="POST" enctype="multipart/form-data" onsubmit="return validate1(this)" >
					<fieldset>
						<section id="equipoEtiqueta">
							<label for="nombre">*Nombre</label>
							<label for="estado">*Estado</label>
							<label for="interes">*Área de interés</label>
							<label for="archivo">*Subir curriculo en formato PDF</label>
						</section>
						<section id="equipoCajas">
							<input type="text" name="nombre" id="nombre" placeholder="Nombre" required onkeypress="return validar(event)">
							<select name="estado" id="estado" placeholder="elige una opción" required onkeypress="return validar(event)">
								<script language="javascript">
								var states = new Array("Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas", "Chihuahua", "Coahuila de Zaragoza", "Colima", "Distrito Federal", "Durango", "Guanajuato", "Guerrero", "Hidalgo", "Jalisco", "México", "Michoacán de Ocampo", "Morelos", "Nayarit", "Nuevo León", "Oaxaca", "Puebla", "Querétaro", "Quintana Roo", "San Luis Potosí", "Sinaloa", "Sonora", "Tabasco", "Tamaulipas", "Tlaxcala", "Veracruz", "Yucatán", "Zacatecas");
								for(var hi=0; hi<states.length; hi++) 
								document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
								</script>
							</select>
							<select name="interes" id="interes" placeholder="elige una opción" onkeypress="return validar(event)">
								<option value="Ventas">Ventas</option>
								<option value="ACliente">Atención a Cliente</option>
								<option value="RH">Recursos Humanos</option>
								<option value="Finanzas">Finanzas</option>
								<option value="Contraloría">Contraloría</option>
								<option value="TI">Tecnología de Información</option>
								<option value="CyL">Compras y Logística</option>
								<option value="Legal">Legal</option>
								<option value="Mkt">Mercadotecnia</option>
							</select>
							<input type="file" name="archivo" id="archivo" placeholder="archivo PDF" value="seleccionar" required onkeypress="return validar(event)">
						</section>
						<section id="equipoEnvia">
							<input name="Enviar" type="submit" class="botonEnvia" id="button" value="ENVIAR"/>
						</section>

					</fieldset>
					</form>
					<?php }
						else 
							{ 
								require_once("carga_archivos.php");
						 	}//fin else?>
			</section>
		</section>


	</section>
	<?php require(".footer.php") ?>
</body>
</html>	