<!DOCTYPE html>
<?php $ac = 1; ?>
<html lang="es">
<head>
<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> -->
<link rel="shortcut icon" href="favicon.ico">
<title>Cerrajes&reg; el herraje ideal para su mueble... - Home</title>
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
			<div class="tituloSeccion"><strong>Tendencias del herraje II</strong></div>
			<article class="articuloHome">
				<div class="homeArticulo">
					<figure class="img01"><img class="imgW2 img1" src="imagenesSitio/EspaciosReducidos.jpg" alt="Tendencias"><figcaption><small>Vibo news2014</small></figcaption></figure>
					<div class="homeTxt">
						<div>
						<strong class="verdeHome">Espacios Reducidos</strong><br>
							La creciente necesidad por el aprovechamiento en espacios reducidos, se ha vuelto más común recientemente, lo que ha llevado a los diseñadores a buscar nuevas alternativas, tanto en el diseño de objetos de apariencia minimalista, como en la organización y optimización del espacio para su almacenamiento.<br><br>
							La fácil accesibilidad a los artículos se vuelve cada vez más importante dentro del diseño de cocinas, donde, herrajes adecuados para áreas de difícil acceso, se tornan cada vez más apreciados.
						</div>	
					</div>
				</div>
				<div class="homeArticulo">
					<figure class="img01"><img class="imgW1" src="imagenesSitio/minimalismo.jpg" alt="minimalismo"><figcaption><small>http://culturacolectiva.com/wp-content/uploads/2013/06/minimalismo1.jpeg</small></figcaption></figure>
					<div class="homeTxt">
						<div>
						<strong class="verdeHome">Minimalismo</strong><br>
							En contraparte, los espacios abiertos, también conocidos como <span class="verdeHome">"Lofts"</span>  utilizan como principal recurso de diseño el <span class="verdeHome">MINIMALISMO</span>, tendencia en la que la frase <strong>menos es más</strong> adquiere absoluta fortaleza. Este estilo de diseño se caracteriza por la utilización de pocos elementos y carencia de color. Es un estilo que carece de desorden y los espacios son extremadamente limpios.
						</div>	
					</div>
				</div>
				<div class="homeArticulo">
					<figure class="img01"><img class="imgW1" src="imagenesSitio/eclecticismo.jpg" alt="eclecticismo"><figcaption><small>http://img.decoesfera.com/2011/09/casaeclectica1.jpg</small></figcaption></figure>
					<div class="homeTxt">
						<div>
						<strong class="verdeHome">Eclecticismo</strong><br>
							Una tendencia artística en la que se mezclan elementos de diferentes estilos y épocas de la historia del arte y la arquitectura, la nostalgia de un pasado indeterminado, diseño propio de un <span class="verdeHome">coleccionista</span>, si se tratara de un collage para crear ambientes bellos a partir de la interacción de diferentes estilos de muebles que resulten funcionales. Sin dogmas ni sentido de trascendencia.<br><br>
							Es un estilo abierto a los cambios en la decoración y, en especial, en los detalles.

						</div>	
					</div>
				</div>
				<div class="homeArticulo">
					<figure class="img01"><img class="imgW2" src="imagenesSitio/artesanal.jpg" alt="artesanal"><figcaption><small>http://static1.decoora.com/wp-content/uploads/2013/02/mexican-02_570x375_scaled_cropp.jpg</small></figcaption></figure>
					<div class="homeTxt">
						<div>
						<strong class="verdeHome">Artesanal</strong><br>
							Un estilo que siempre ha estado presente, caracterizado por el uso de colores vivos, maderas laqueadas, a lo largo del tiempo ha conjugado la esencia natural de los materiales con la modernidad de los diseños de espacios, esta tendencia deja ver ambientes realmente acogedores en destinos donde la naturaleza abraza el entorno.<br><br>
							La decoración rustica mexicana, es muy rica en adherir el colorido de sus textiles y la belleza de sus artesanías de alfarería y orfebrería.

						</div>	
					</div>
				</div>

			</article>			
		</section>


	</section>
	<?php require(".footer.php") ?>
</body>
</html>	