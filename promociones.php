<!DOCTYPE html>
<?php $ac = 11; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> -->
<link rel="shortcut icon" href="favicon.ico">
<title>Cerrajes&reg; el herraje ideal para su mueble... - Promociones</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/prefixfree.min.js"></script>
</head>
<body>
<?php
require ('controladores/funciones.php');
if (verificar_cliente()){
//aqui debe venir todo el contenido necesario que solo el usuario validado puede acceder
	
	require(".header.html") ?>
	<section id="menuProductos">
		<?php 
			require("menu/.menu.php");
			require(".registro.php") ?>
	</section>
	<section id="contenedor">
		<?php require(".nav.php") ?>
		<section  id="contenido">
			<div class="tituloSeccion"><strong>Promociones</strong><section id="cerrar"><span><?php echo $_SESSION['nombre'];?></span><a href='controladores/salir.php'/>cerrar sesión</a></section></div>	
			
			<section class="promo">
				<div id="tituloEspecial"><h3>Precio especial por introducción, obtén grandes beneficios solicitando el producto vía mail.</h3></div>
				<figure>
					<img src="imagenesSitio/promociones/promocion-01.png" alt="">
					<img src="imagenesSitio/promociones/promocion-02.png" alt="">
					<img src="imagenesSitio/promociones/promocion-03.png" alt="">
				</figure>
			</section>
			<div id="restricciones">
				Envía un correo a <a class="mailPromo" href="mailto:promociones@cerrajes.com">promociones@cerrajes.com</a> con tu pedido, indicando los siguientes datos:<br><br>

				-Dirección de envío: Calle y No., Colonia, CP, Ciudad, Estado<br>
				-Teléfono de referencia incluyendo lada<br>
				-Clave de cliente y RFC al que se facturará<br><br>

				Recibirás tu producto en la dirección indicada en un lapso no mayor a 4 días, el flete está incluido en esta promoción. PROMOCIÓN EXCLUSIVA  A TRAVÉS DE LA PÁGINA WEB.<br>
				Promoción válida del 18 de Agosto al 30 de Septiembre 2014 o hasta agotar 100 piezas de cada uno de los códigos participantes (lo que suceda primero).<br>
				Promoción exclusiva de Cerrajes México para clientes actuales de Cerrajes México que estén dados de alta en la base de datos, no  aplica con otras promociones y descuentos de clientes, los precios ya incluyen IVA,  no hay cambios ni devoluciones al adquirir estas promociones.<br>
				Si realizas el pedido directamente con tu asesor de ventas el producto se enviará a la sucursal y él te informará el tiempo de entrega del mismo.
			</div>
		</section>
	</section>
	<?php require(".footer.php"); 

} else {
header('Location:promo.php');
}
?>
</body>
</html>	