<!DOCTYPE html>
<?php $ac = 10; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> -->
<link rel="shortcut icon" href="favicon.ico">
<title>Cerrajes&reg; el herraje ideal para su mueble... - Noticias</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/prefixfree.min.js"></script>
</head>
<body>
<?php require(".header.php") ?>
	<section id="menuProductos">
		<?php 
			require("menu/.menu.php");
			require(".registro.php") ?>
	</section>
	<section id="contenedor">
		<?php require(".nav.php") ?>
		<section  id="contenido">
			<div class="tituloSeccion"><strong>Noticias</strong></div>
			<section class="noticias">
				<figure><a href="http://www.cerrajes.com/productos.php?id_linea=03&id_sublinea=0302" target="_blank"><img src="imagenesSitio/noticias/expo-AMPIMM-2015_01.jpg" alt=""/></a></figure>
				<figure><img src="imagenesSitio/noticias/expo-AMPIMM-2015_02.jpg" alt=""/></figure>
			</section>
		</section>
	</section>
	<?php require(".footer.php") ?>
</body>
</html>	