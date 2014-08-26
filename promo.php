<!DOCTYPE html>
<?php $ac = 11; 
/***VARIABLES POR GET ***/
$numero1 = count($_GET);
$tags1 = array_keys($_GET);// obtiene los nombres de las varibles
$valores1 = array_values($_GET);// obtiene los valores de las varibles

for($i=0;$i<$numero1;$i++){// crea las variables y les asigna el valor
$$tags1[$i]=$valores1[$i];
}

if (isset($n)) {
  $n = $n;
} else {
	$n='s';
}?>
<html lang="es">
<head>
<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> -->
<link rel="shortcut icon" href="favicon.ico">
<title>Cerrajes&reg; el herraje ideal para su mueble... - Ingresa con tu clave</title>
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
			<section id="promoDatos" class="promoClave">
				<section id="formPromo">
					<div id="tituloP">PROMOCIONES EXCLUSIVAS PARA NUESTROS CLIENTES</div>
					<form id="promoForm" method="post" action="promo2.php">
							<section id="promoEtiquetas">
								<label for="cliente">INGRESA TU CLAVE DE CLIENTE:</label>
							</section>
							<section id="promoCajas">
								<input type="text" name="cliente" id="cliente" placeholder="clave cliente" required/>
								<?php //var_dump($n);
								 if ($n == 'n') {?>
								<span class="claveError">clave incorrecta, vuelve a intentarlo.</span>
								<?php }?>
							</section>
							<button type="submit" class="btn btn-default">VER PROMOCIONES</button>
					</form>
				</section>
				<section id="imgPromo">
					<img src="imagenesSitio/promociones/imgPromo.jpg" alt="">
				</section>
				<section id="tagPromo">
					<img src="imagenesSitio/promociones/tagPromo.png" alt="">
				</section>
				<section id="footerPromo">Tus datos no se usarán con otros fines. 
					<a href="privacidad.php" target="_blank" title="ver aviso de privacidad">AVISO DE PRIVACIDAD</a>
				</section>			
			</section>
		</section>
	</section>
	<?php require(".footer.php") ?>
</body>
</html>	