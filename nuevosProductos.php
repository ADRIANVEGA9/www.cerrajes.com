<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> -->
<link rel="shortcut icon" href="favicon.ico">
<title>Cerrajes&reg; el herraje ideal para su mueble... - Nuevos Productos</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/prefixfree.min.js"></script>
</head>
<body>
<?php require(".header.html") ?>
	<section id="menuProductos">
		<div id="tituloProductos"><span>productos</span></div>
		<?php require("menu/.menu.html") ?>
	</section>
	<section id="contenedor">
		<?php require(".nav.php") ?>
		<section id="contenido">
			<div class="tituloSeccion"><strong>Nuevos productos</strong></div>

			<section id="np_iconos">
				<section class="icono">
					<figure><img id="01" src="imagenesSitio/nuevosProductos/01.png" alt="icono"/></figure>
					<figcaption>Accesorio flexible</figcaption>
				</section>
				<section class="icono">
					<figure><img id="02" src="imagenesSitio/nuevosProductos/02.png" alt="icono"/></figure>
					<figcaption>Cross dowel</figcaption>
				</section>
				<section class="icono">
					<figure><img id="03" src="imagenesSitio/nuevosProductos/03.png" alt="icono"/></figure>
					<figcaption>Cerrajes click</figcaption>
				</section>
				<section class="icono">
					<figure><img id="04" src="imagenesSitio/nuevosProductos/04.png" alt="icono"/></figure>
					<figcaption>Bisagra Cerrajes</figcaption>
				</section>
				<section class="icono">
					<figure><img id="05" src="imagenesSitio/nuevosProductos/05.png" alt="icono"/></figure>
					<figcaption>Burro de planchar</figcaption>
				</section>
				<section class="icono">
					<figure><img id="06" src="imagenesSitio/nuevosProductos/06.png" alt="icono"/></figure>
					<figcaption>Soportes</figcaption>
				</section>
				<section class="icono">
					<figure><img id="07" src="imagenesSitio/nuevosProductos/07.png" alt="icono"/></figure>
					<figcaption>Soporte magnético</figcaption>
				</section>
				<section class="icono">
					<figure><img id="08" src="imagenesSitio/nuevosProductos/08.png" alt="icono"/></figure>
					<figcaption>Organizador de platos</figcaption>
				</section>
				<section class="icono">
					<figure><img id="09" src="imagenesSitio/nuevosProductos/09.png" alt="icono"/></figure>
					<figcaption>Bote para basura</figcaption>
				</section>
			</section>

			<section id="np_info">
				<figure id="np_img01" class="_on"><img src="imagenesSitio/nuevosProductos/01.jpg" alt=""></figure>
				<figure id="np_img02" class="_off"><img src="imagenesSitio/nuevosProductos/02.jpg" alt=""></figure>
				<figure id="np_img03" class="_off"><img src="imagenesSitio/nuevosProductos/03.jpg" alt=""></figure>
				<figure id="np_img04" class="_off"><img src="imagenesSitio/nuevosProductos/04.jpg" alt=""></figure>
				<figure id="np_img05" class="_off"><img src="imagenesSitio/nuevosProductos/05.jpg" alt=""></figure>
				<figure id="np_img06" class="_off"><img src="imagenesSitio/nuevosProductos/06.jpg" alt=""></figure>
				<figure id="np_img07" class="_off"><img src="imagenesSitio/nuevosProductos/07.jpg" alt=""></figure>
				<figure id="np_img08" class="_off"><img src="imagenesSitio/nuevosProductos/08.jpg" alt=""></figure>
				<figure id="np_img09" class="_off"><img src="imagenesSitio/nuevosProductos/09.jpg" alt=""></figure>
			</section>

		</section>
	</section>
<?php require(".footer.php") ?>

<script>

	$('#np_iconos .icono figure img').click( mostrarOcultar );

	function mostrarOcultar(){
		 $idn = this.id;
		console.log("aqui estoy"+$idn);
var $np_on  		= $('#np_info #np_img'+$idn),
	$np_off  		= $('#np_info #np_img'+$idn).siblings();
		//console.log("aqui estoy");
		console.log("$np_on = "+$np_on);
	$np_off.removeClass('_on');
	$np_on.addClass('_on');
	$np_off.addClass('_off');
	$np_on.removeClass('_off');
}

</script>
</body>
</html>	