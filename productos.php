<!DOCTYPE html>
<?php $ac = 12; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> -->
<link rel="shortcut icon" href="favicon.ico">
<title>Cerrajes&reg; el herraje ideal para su mueble... - Productos</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/prefixfree.min.js"></script>
</head>
<body>
<?php require(".header.html") ?>
	<section id="menuProductos">
		<?php require("menu/.menu.php") ?>
		<section id="simbologia">
			<img class="lineaPunteada" src="imagenesSitio/productos/simbologia-01.png" alt="">
			<img class="lineaPunteada" src="imagenesSitio/productos/simbologia-03.png" alt="">
			<img class="lineaPunteada" src="imagenesSitio/productos/simbologia-02.png" alt="">
			<img class="lineaPunteada" src="imagenesSitio/productos/simbologia-04.png" alt="">			
			<img src="imagenesSitio/productos/simbologia-05.png" alt="">			
		</section>				
	</section>
	<section id="contenedor">
		<?php require(".nav.php") ?>
		<section  id="contenido">
			<div class="tituloSeccion"><strong>Maquinaria y herramienta</strong></div>	
			<section id="productos">
				<span id="sublinea">Maquinaria</span>

				<section id="producto">
					<figure id="suelto"><img src="imagenesSitio/productos/0101-127.png" alt=""/></figure>
					<section id="codigo">
						<span>Máquina embisagradora perf 48x6mm p/bisagra salice/fgv</span><br>
						<span>Código: </span><span class="codigo">0101-127</span><br>
						<small>1</small><span>UM: Pieza</span><br>
						<small>2</small><span>UxC: 1 Pieza</span><br>
						<figure>
							<img src="imagenesSitio/productos/iconos/perforacion.png" alt="icono"/>
							<div>48x6mm</div>
						</figure>
						<figure>
							<img src="imagenesSitio/productos/iconos/ap_frontal.png" alt="icono"/>
						</figure>					
					</section>
					<figure id="aplicado"><img src="imagenesSitio/productos/0101-127_.png" alt=""/></figure>
				</section>
				<div class="ProductosLineaPunteada"></div>

				<section id="producto">
					<figure id="suelto"><img src="imagenesSitio/productos/0101-128.png" alt=""/></figure>
					<section id="codigo">
						<span>Máquina embisagradora 48x6mm con brocas 35mm y 2mm</span><br>
						<span>Código: </span><span class="codigo">0101-128</span><br>
						<small>1</small><span>UM: Pieza</span><br>
						<small>2</small><span>UxC: 1 Pieza</span><br>
						<figure>
							<img src="imagenesSitio/productos/iconos/perforacion.png" alt="icono"/>
							<div>48x6mm</div>
						</figure>
						<figure>
							<img src="imagenesSitio/productos/iconos/ap_frontal.png" alt="icono"/>
						</figure>
						<section id="ficha">
							<span class="ft">FT</span>&nbsp;&nbsp;Ficha Técnica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<span id="FT-0101-128" class="mostrar">Mostrar&nbsp;</span>
						</section>
					</section>
					<figure id="aplicado"><img src="imagenesSitio/productos/0101-128_.png" alt=""></figure>
				</section>
				<article id="vFT-0101-128">
					<figure><img src="imagenesSitio/productos/fichas/FT-0101-128.jpg" alt=""></figure>
				</article>	
				<div class="ProductosLineaPunteada"></div>

				<section id="producto">
					<figure id="suelto"><img src="imagenesSitio/productos/0101-128.png" alt=""/></figure>
					<section id="codigo">
						<span>Máquina embisagradora 48x6mm con brocas 35mm y 2mm</span><br>
						<span>Código: </span><span class="codigo">0101-129</span><br>
						<small>1</small><span>UM: Pieza</span><br>
						<small>2</small><span>UxC: 1 Pieza</span><br>
						<figure>
							<img src="imagenesSitio/productos/iconos/perforacion.png" alt="icono"/>
							<div>48x6mm</div>
						</figure>
						<figure>
							<img src="imagenesSitio/productos/iconos/ap_frontal.png" alt="icono"/>
						</figure>
						<section id="ficha">
							<span class="ft">FT</span>&nbsp;&nbsp;Ficha Técnica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<span id="FT-0101-129" class="mostrar">Mostrar&nbsp;</span>
						</section>
					</section>
					<figure id="aplicado"><img src="imagenesSitio/productos/0101-128_.png" alt=""></figure>
				</section>
				<article id="vFT-0101-129">
					<figure><img src="imagenesSitio/productos/fichas/FT-0101-128.jpg" alt=""></figure>
				</article>	
				<div class="ProductosLineaPunteada"></div>

			</section>
		</section>

	</section>
	<?php require(".footer.php") ?>

<script>

	$('#productos #producto #codigo #ficha .mostrar').click( mostrarOcultar );

	function mostrarOcultar(e){
	// console.log(e);
		 $idn = this.id;
		 $txt = $('#productos #producto #codigo #ficha #'+$idn).text();
		console.log("entré a la función"+$txt);
var $ft  		= $('#productos #v'+$idn);

	$test=$('#productos #v'+$idn).css('display');
	console.log('es none? '+$test);
	if ($('#productos #v'+$idn).css('display') == 'none') {
		$('#productos #producto #codigo #ficha #'+$idn).text('Ocultar ');
		$('#productos #producto #codigo #ficha #'+$idn).addClass('ocultar')
	} 
	if ($('#productos #v'+$idn).css('display') == 'block') {
		$('#productos #producto #codigo #ficha #'+$idn).text('Mostrar ');
		$('#productos #producto #codigo #ficha #'+$idn).removeClass('ocultar')	
	};

	$ft.slideToggle( 300 );
}

</script>
</body>
</html>	