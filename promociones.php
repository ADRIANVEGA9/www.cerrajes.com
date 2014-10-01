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
				<div id="tituloEspecial"><h3>Espera nuestras próximas promociones</h3></div>
				<figure>
				<!-- 	<img src="imagenesSitio/promociones/promocion-01.png" alt="">
					<img src="imagenesSitio/promociones/promocion-02.png" alt="">
					<img src="imagenesSitio/promociones/promocion-03.png" alt=""> -->
				</figure>
			</section>
			<div id="restricciones">
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