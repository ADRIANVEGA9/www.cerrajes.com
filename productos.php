<!DOCTYPE html>
<?php $ac = 13; 
include("connections/db.inc.php"); 
/***VARIABLES POR GET ***/
$numero1 = count($_GET);
$tags1 = array_keys($_GET);// obtiene los nombres de las varibles
$valores1 = array_values($_GET);// obtiene los valores de las varibles

for($i=0;$i<$numero1;$i++){// crea las variables y les asigna el valor
$$tags1[$i]=$valores1[$i];
}
/***VARIABLES POR POST ***/
$numero = count($_POST);
$tags = array_keys($_POST); // obtiene los nombres de las varibles
$valores = array_values($_POST);// obtiene los valores de las varibles

for($i=0;$i<$numero;$i++){ // crea las variables y les asigna el valor
$$tags[$i]=$valores[$i]; 
}
/*ahora solo hay que llamar las variables por su nombre*/

if (isset($id_linea)) {
  $id_linea = $id_linea;
} else {
	$id_linea='01';
}

if (isset($id_sublinea)) {
  $id_sublinea = $id_sublinea;
} else {
	$id_sublinea='0101';
}

$query_titulo= $db->Execute("SELECT linea.linea, sublinea.sublinea
								FROM linea
								INNER JOIN sublinea ON linea.id_linea = sublinea.id_linea
								WHERE linea.id_linea = '$id_linea' AND sublinea.id_sublinea = '$id_sublinea'");
// Verificamos si hemos realizado bien nuestro Query
if(!$query_titulo){
exit("Error en la consulta titulo");
}

?>
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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="js/ddpowerzoomer.js"></script>
<script type="text/javascript">//http://www.dynamicdrive.com/dynamicindex4/powerzoomer.htm
jQuery(document).ready(function($){ //fire on DOM ready
	//	EXAMPLE 1:	$('#simbologia .lineaPunteada').addpowerzoom()
	//EXAMPLE 2:
	$('#simb01').addpowerzoom({	defaultpower: 2, powerrange: [2,5],	largeimage: 'imagenesSitio/productos/simbologia-01.png', magnifiersize: [350,150] })
	$('#simb02').addpowerzoom({	defaultpower: 2, powerrange: [2,5],	largeimage: null, magnifiersize: [350,150] })
	$('#simb03').addpowerzoom({	defaultpower: 2, powerrange: [2,5],	largeimage: null, magnifiersize: [350,150] })
	$('#simb04').addpowerzoom({	defaultpower: 2, powerrange: [2,5],	largeimage: null, magnifiersize: [350,150] })
	$('#simb05').addpowerzoom({	defaultpower: 2, powerrange: [2,5],	largeimage: null, magnifiersize: [350,150] })
	
})
</script>

</head>
<body>
<?php require(".header.html") ?>
	<section id="menuProductos">
		<?php require("menu/.menu.php") ?>
		<section id="simbologia">
			<img id="simb00" class="simb00" src="imagenesSitio/productos/simbologia-00.png" alt="">
			<img id="simb02" class="lineaPunteada" src="imagenesSitio/productos/simbologia-03.png" alt="">
			<img id="simb01" class="lineaPunteada" src="imagenesSitio/productos/simbologia-01.png" alt="">
			<img id="simb03" class="lineaPunteada" src="imagenesSitio/productos/simbologia-02.png" alt="">
			<img id="simb05" class="lineaPunteada" src="imagenesSitio/productos/simbologia-05.png" alt="">	
			<img id="simb04" src="imagenesSitio/productos/simbologia-04.png" alt="">					
		</section>				
	</section>
	<section id="contenedor">
		<?php require(".nav.php") ?>
		<section  id="contenido">
		<?php
		foreach($query_titulo as $t => $row_titulo) 
		{//inicia Titulos linea - sublinea?> 
			<div class="tituloSeccion"><strong><?php echo $row_titulo['linea'];?></strong></div>	
			<section id="productos">
				<span id="sublinea"><?php echo $row_titulo['sublinea'];?></span>
		<?php } //termina Titulos linea - sublinea?>
				<section id="producto">
					<figure id="suelto"><img src="imagenesSitio/productos/0101-127.png" alt=""/></figure>
					<section id="codigo">
						<span>Máquina embisagradora perf 48x6mm p/bisagra salice/fgv</span><br>
						<span>Código: </span><span class="codigo">0101-127</span><br>
						<span>UM: Pieza</span><br>
						<span>UxC: 1 Pieza</span><br>
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
						<span>UM: Pieza</span><br>
						<span>UxC: 1 Pieza</span><br>
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
					<!-- <iframe src="fichas/FT-0102-024_242.pdf" width="100%" height="600" type="application/pdf" ></iframe> -->
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