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
<?php require(".header.html") ?>
	<section id="menuProductos">
		<?php 
			require("menu/.menu.php");
			require(".registro.php") ?>
	</section>
	<section id="contenedor">
		<?php require(".nav.php") ?>
		<section  id="contenido">
			<div class="tituloSeccion"><strong>Promociones</strong></div>	
			<section class="promo">
				<figure>
					<img src="imagenesSitio/promociones/promocion-01.png" alt="">
					<img src="imagenesSitio/promociones/promocion-02.png" alt="">
					<img src="imagenesSitio/promociones/promocion-03.png" alt="">
				</figure>
			</section>
		</section>
	</section>
	<?php require(".footer.php") ?>
</body>
</html>	