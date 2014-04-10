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

$query_titulo = $db->Execute("SELECT linea.linea, sublinea.sublinea
								FROM linea
								INNER JOIN sublinea ON linea.id_linea = sublinea.id_linea
								WHERE linea.id_linea = '$id_linea' AND sublinea.id_sublinea = '$id_sublinea'");
// Verificamos si hemos realizado bien nuestro Query
if(!$query_titulo){
exit("Error en la consulta titulo");
}

$query_productos = $db->Execute("SELECT *, GROUP_CONCAT( DISTINCT id SEPARATOR  ' - ') AS codigos, count('codigos') AS cuenta
								FROM productos
								WHERE linea = '$id_linea' AND sublinea = '$id_sublinea'
								GROUP BY id");
// Verificamos si hemos realizado bien nuestro Query
if(!$query_productos){
exit("Error en la consulta productos");
}

?>
<html lang="es">
<head>
<meta charset="utf-8">
<!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> -->
<link rel="shortcut icon" href="favicon.ico">
<title>Cerrajes&reg; el herraje ideal para su mueble... - Productos</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/prefixfree.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

</head>
<body>
<?php require(".header.html") ?>
	<section id="menuProductos">
		<?php require("menu/.menu.php") ?>
		<?php require(".zoom.html") ?>

	</section>
	<section id="contenedor">
		<?php require(".nav.php") ?>
		<section  id="contenido">
		<?php
		foreach($query_titulo as $t => $row_titulo) 
		{//inicia Titulos linea - sublinea 			print $query_productos;?> 
			<div class="tituloSeccion"><strong><?php echo $row_titulo['linea'];?></strong></div>	
			<section id="productos">
				<span id="sublinea"><?php echo $row_titulo['sublinea'];?></span>
				<?php } //termina Titulos linea - sublinea
					foreach($query_productos as $p => $row_producto)
					{//inicia foreach productos
				?>

					<section id="producto" class="sombra">
						<figure id="suelto">
							<img src="http://cerrajes.me/imgCerrajes/img/<?php print $row_producto['imagen']?>.png" alt="<?php print $row_producto['imagen']?>"/>
						</figure>
						
						<section id="codigo">
							<span><?php print $row_producto['Descripción']?></span><br>
							<span>C&oacute;digo: </span><span class="codigo"><?php print $row_producto['Código'].'-'.$row_producto['cuenta']?></span><br>
							<span>UM: <?php print $row_producto['UM'];?></span><br>
							<span>UxC: <?php print $row_producto['UXC'];?></span><br>
							
							<?php if ($row_producto[utf8_decode('Perforación')] <> "") { //inicia icono perforación?>
								<figure>
									<img src="imagenesSitio/productos/iconos/perforacion.png" alt="icono"/>
									<div><?php print $row_producto[utf8_decode('Perforación')] ?></div>
								</figure>
							<?php } //termina icono perforación?>

								<figure>
								<?php if ($row_producto[utf8_decode('Aplicación')] <> "") { //inica icono aplicación?>
									<img src="imagenesSitio/productos/iconos/<?php print $row_producto[utf8_decode('Aplicación')] ?>.png" alt="icono"/>
								<?php } //termina icono aplicación?>
								</figure>
							
							<?php if ($row_producto['ficha'] <> "") {//inicia if ficha ?>
								<section id="ficha">
									<span class="ft">FT</span>&nbsp;&nbsp;Ficha T&eacute;cnica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<span id="<?php print $row_producto['ficha'];?>" class="mostrar">Mostrar&nbsp;</span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descargar&nbsp;
									<a id="down" class="icon-download" href="http://www.cerrajes.me/fichas/<?php print $row_producto['ficha'];?>.pdf" target="_blank" title="Descargar pdf"></a>
								</section>
							<?php } //termina if ficha?>
							
							<?php if ($row_producto['instructivo'] <> "") {//inicia if instructivo ?>
								<section id="instructivo">
									<span class="ii">&nbsp;II&nbsp;</span>
									<span>&nbsp;&nbsp;Instructivo de Instalaci&oacute;n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									<span id="<?php print $row_producto['instructivo'];?>" class="mostrar">Mostrar&nbsp;</span>
									<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descargar&nbsp;</span>
									<span>
										<a id="down" class="icon-download" href="http://www.cerrajes.me/instructivos/<?php print $row_producto['instructivo'];?>.pdf" target="_blank" title="Descargar pdf"></a>
									</span>
								</section>
							<?php } //termina if instructivo?>

						</section>

						<figure id="aplicado">
							<img src="http://cerrajes.me/imgCerrajes/aplicado/<?php print $row_producto['imagenA']?>.png" alt="<?php print $row_producto['imagenA']?>"/>
						</figure>

					</section>

					<article id="v<?php print $row_producto['ficha'];?>">
						<figure><img src="imagenesSitio/productos/fichas/FT-0101-128.jpg" alt=""></figure>
						<!-- <iframe src="fichas/FT-0102-024_242.pdf" width="100%" height="600" type="application/pdf" ></iframe> -->
					</article>

					<article id="v<?php print $row_producto['instructivo'];?>">
						<figure><img src="imagenesSitio/productos/fichas/FT-0101-128.jpg" alt=""></figure>
						<!-- <iframe src="fichas/FT-0102-024_242.pdf" width="100%" height="600" type="application/pdf" ></iframe> -->
					</article>			

					<div class="ProductosLineaPunteada"></div>

				<?php } //termina foreach productos ?>

			</section>
		</section>

	</section>
	<?php require(".footer.php") ?>

<script>

	$('#productos #producto #codigo #ficha .mostrar').click( mostrarOcultarF );

	function mostrarOcultarF(e){
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

	$('#productos #producto #codigo #instructivo .mostrar').click( mostrarOcultarI );

	function mostrarOcultarI(e){
	// console.log(e);
		 $idn = this.id;
		 $txt = $('#productos #producto #codigo #instructivo #'+$idn).text();
		console.log("entré a la función"+$txt);
var $ii  		= $('#productos #v'+$idn);

	$test=$('#productos #v'+$idn).css('display');
	console.log('es none? '+$test);
	if ($('#productos #v'+$idn).css('display') == 'none') {
		$('#productos #producto #codigo #instructivo #'+$idn).text('Ocultar ');
		$('#productos #producto #codigo #instructivo #'+$idn).addClass('ocultar')
	} 
	if ($('#productos #v'+$idn).css('display') == 'block') {
		$('#productos #producto #codigo #instructivo #'+$idn).text('Mostrar ');
		$('#productos #producto #codigo #instructivo #'+$idn).removeClass('ocultar')	
	};

	$ii.slideToggle( 300 );
}
</script>
</body>
</html>	