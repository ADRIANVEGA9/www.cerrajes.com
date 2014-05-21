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

$query_productos = $db->Execute("SELECT *, GROUP_CONCAT( DISTINCT id SEPARATOR  ' - ') AS ids
										 , GROUP_CONCAT( DISTINCT Código SEPARATOR  '<br>') AS codigo, count('ids') AS cuenta
										 , GROUP_CONCAT( UXC SEPARATOR  '<br>') AS uxc
										 , GROUP_CONCAT( DISTINCT UXC SEPARATOR  '<br>') AS uxcD
										 , GROUP_CONCAT( Medida SEPARATOR  '<br>') AS medida
										 , GROUP_CONCAT( Diámetro SEPARATOR  '<br>') AS diametro
										 , GROUP_CONCAT( DISTINCT Diámetro SEPARATOR  '<br>') AS diametroD
										 , GROUP_CONCAT( Freno SEPARATOR  '<br>') AS freno
										 , GROUP_CONCAT( Alto SEPARATOR  '<br>') AS alto
										 , GROUP_CONCAT( Ancho SEPARATOR  '<br>') AS ancho
										 , GROUP_CONCAT( Pistón SEPARATOR  '<br>') AS piston
										 , GROUP_CONCAT( Fuerza SEPARATOR  '<br>') AS fuerza
										 , GROUP_CONCAT( Largo SEPARATOR  '<br>') AS largo
										 , GROUP_CONCAT( ParaPerfil SEPARATOR  '<br>') AS perfil
										 , GROUP_CONCAT( Aplicación SEPARATOR  '<br>') AS aplicacion
										 , GROUP_CONCAT( Material SEPARATOR  '<br>') AS material
										 , GROUP_CONCAT( DISTINCT Material SEPARATOR  '<br>') AS materialD
										 , GROUP_CONCAT( Acabado SEPARATOR  '<br>') AS acabado
										 , GROUP_CONCAT( DISTINCT Acabado SEPARATOR  '<br>') AS acabadoD
										 , GROUP_CONCAT( Orientación SEPARATOR  '<br>') AS orientacion
										 , GROUP_CONCAT( TipoPuerta SEPARATOR  '<br>') AS tipoPuerta
										 , GROUP_CONCAT( DISTINCT TipoPuerta SEPARATOR  '<br>') AS tipoPuertaD
										 , GROUP_CONCAT( complementario SEPARATOR  '<br>') AS complemento
										 , GROUP_CONCAT( opcional SEPARATOR  '<br>') AS opcion
										 , GROUP_CONCAT( Ajuste SEPARATOR  '<br>') AS ajuste
								FROM productos
								WHERE linea = '$id_linea' AND sublinea = '$id_sublinea'
								GROUP BY id
								ORDER BY id ASC");
// Verificamos si hemos realizado bien nuestro Query
//var_dump($db);
//var_dump($query_productos);
//print $db->_errorMsg;
//print $query_productos;
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
						$material = explode("<br>", $row_producto['materialD']);//explode convierte un string en un array, en base a un delimitador, en este caso <br>
						$cuentaMaterial = count($material);
						$acabado = explode("<br>", $row_producto['acabadoD']);
						$cuentaAcabado = count($acabado);
						$diametro = explode("<br>", $row_producto['diametroD']);
						$cuentaDiametro = count($diametro);
						$uxc = explode("<br>", $row_producto['uxcD']);
						$cuentaUXC = count($uxc);
						$tipoPuerta = explode("<br>", $row_producto['tipoPuertaD']);
						$cuentatipoPuerta = count($tipoPuerta);
						//var_dump($diametro);//var_dump ver el contenido de la variable
						//var_dump($cuentaDiametro);
				?>

					<section id="producto" class="sombra">
						<figure id="suelto"><!-- imagen de producto "suelto" -->
							<img src="http://cerrajes.me/imgCerrajes/img/<?php print $row_producto['imagen']?>.png" alt="<?php print $row_producto['imagen']?>"/>
						</figure>
						
						<section id="codigo"><!-- inicia sección de información de producto -->
							<span id="descripcion"><?php print $row_producto['Descripción'].' '; if ($row_producto['cuenta']==1 && $row_producto['Medida'] <> ""){ print $row_producto['Medida'];}?></span>
							
							<span id="codigoUM">
								<?php if ($row_producto['cuenta']==1) { //si cuenta es == 1, es un solo código?>
								<span>C&oacute;digo: </span><span class="codigo"><?php print $row_producto['codigo']?></span><br>
								<?php } //termina código unico?>
																
								<span>UM: <?php print $row_producto['UM'];?></span><br>
								<?if  ( ($row_producto['UXC'] <> "") AND ($cuentaUXC == 1)) {								?>
								<span>UxC: <?php print $row_producto['UXC'];?></span><br>
								<?php } ?>

								<?php if ($row_producto['Logotipo'] <> "") {?>									
								<div id="logo">
									<img src="imagenesSitio/productos/iconos/<?php print $row_producto['Logotipo'] ?>.png" alt="<?php print $row_producto['Logotipo'] ?>"/>
								</div>
								<?php } ?>
							</span>

							<span id="codigoMultiple">
							<?php if ($row_producto['cuenta']>1) 
							{//si cuenta es > 1, es código multiple
								$i=0; ?>
								<div id="recuadro"><!-- inicia recuadro de información de códigos multiples -->
								<?php if ($row_producto['codigo'] <> "") { 
										$i=1; print '<span><span class="titulo">CÓDIGO</span><br>'.$row_producto['codigo'].'</span>'; }?>
							 	<?php if (($row_producto['Medida'] <> "") AND ((substr($row_producto['medida'], 0, 4)) <> "<br>")) { 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">MEDIDA</span><br>'.$row_producto['medida'].'</span>';}
								 	if ((($row_producto['uxc'] <> "")  AND ((substr($row_producto['uxc'], 0, 4)) <> "<br>")) AND ($cuentaUXC>1)){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">UXC</span><br>'.$row_producto['uxc'].'</span>'; }
								 	if ((($row_producto['diametro'] <> "")  AND ((substr($row_producto['diametro'], 0, 4)) <> "<br>")) AND ($cuentaDiametro>1)){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">diametro</span><br>'.$row_producto['diametro'].'</span>'; }
								 	if (($row_producto['freno'] <> "") AND ((substr($row_producto['freno'], 0, 4)) <> "<br>")) { 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">FRENO</span><br>'.$row_producto['freno'].'</span>'; }
								 	if (($row_producto['alto'] <> "") AND ((substr($row_producto['alto'], 0, 4)) <> "<br>")) { 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">alto</span><br>'.$row_producto['alto'].'</span>'; }
								 	if (($row_producto['ancho'] <> "")  AND ((substr($row_producto['ancho'], 0, 4)) <> "<br>")){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">ancho</span><br>'.$row_producto['ancho'].'</span>'; }
								 	if (($row_producto['piston'] <> "")  AND ((substr($row_producto['piston'], 0, 4)) <> "<br>")){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">pistón</span><br>'.$row_producto['piston'].'</span>'; }
								 	if (($row_producto['fuerza'] <> "")  AND ((substr($row_producto['fuerza'], 0, 4)) <> "<br>")){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">fuerza</span><br>'.$row_producto['fuerza'].'</span>'; }
								 	if (($row_producto['largo'] <> "")  AND ((substr($row_producto['largo'], 0, 4)) <> "<br>")){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">largo</span><br>'.$row_producto['largo'].'</span>'; }
								 	if (($row_producto['perfil'] <> "")  AND ((substr($row_producto['perfil'], 0, 4)) <> "<br>")){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">medidas</span><br>'.$row_producto['perfil'].'</span>'; }
								 	if (($row_producto['aplicacion'] <> "")  AND ((substr($row_producto['aplicacion'], 0, 4)) <> "<br>")){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">aplicación</span><br>'.$row_producto['aplicacion'].'</span>'; }
								 	if (($row_producto['orientacion'] <> "")  AND ((substr($row_producto['orientacion'], 0, 4)) <> "<br>")){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">orientación</span><br>'.$row_producto['orientacion'].'</span>'; }
								 	if ((($row_producto['TipoPuerta'] <> "")  AND ((substr($row_producto['tipoPuerta'], 0, 4)) <> "<br>")) AND ($tipoPuerta>1)){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">Tipo de puerta</span><br>'.$row_producto['tipoPuerta'].'</span>';}
								 	if ((($row_producto['material'] <> "")  AND ((substr($row_producto['material'], 0, 4)) <> "<br>")) AND ($cuentaMaterial>1)){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">material</span><br>'.$row_producto['material'].'</span>'; }
								 	if ((($row_producto['acabado'] <> "")  AND ((substr($row_producto['acabado'], 0, 4)) <> "<br>")) AND ($cuentaAcabado>1)){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">acabado</span><br>'.$row_producto['acabado'].'</span>'; }
								 	if (($row_producto['complemento'] <> "")  AND ((substr($row_producto['complemento'], 0, 4)) <> "<br>")){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">complementario</span><br>'.$row_producto['complemento'].'</span>'; }
								 	if (($row_producto['opcion'] <> "")  AND ((substr($row_producto['opcion'], 0, 4)) <> "<br>")){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">opcional</span><br>'.$row_producto['opcion'].'</span>'; }
								 	if (($row_producto['ajuste'] <> "")  AND ((substr($row_producto['ajuste'], 0, 4)) <> "<br>")){ 
										$i++; if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
										print '<span class="titulo">ajuste</span><br>'.$row_producto['ajuste'].'</span>'; }?>
								</div><!-- termina recuadro de información de códigos multiples -->
							<?php 
							}//Complementos y opcionales para códigos unicos.
							if (($row_producto['complemento'] <> "")  AND ($row_producto['cuenta']==1)) {
								print '<span class="verde">»</span><span>'.$row_producto['complemento'].'</span>';
							}
							if (($row_producto['opcion'] <> "")  AND ($row_producto['cuenta']==1)) {
								print '<span class="verde"><br>»</span><span>'.$row_producto['opcion'].'</span>';
							}
							 ?>
							</span>
	<!-- inicia sección de iconos -->
							<span id="iconos">
								<?php if ($row_producto['Bandera'] <> "") { //inicia icono Bandera?>
									<figure>
										<img src="imagenesSitio/productos/iconos/<?php print $row_producto['Bandera'] ?>.png" alt="icono"/>
									</figure>
								<?php } //termina icono Bandera
								if ($row_producto['Perforación'] <> "") { //inicia icono perforación?>
									<figure>
										<img src="imagenesSitio/productos/iconos/perforacion.png" alt="icono"/>
										<div><?php print $row_producto['Perforación'] ?></div>
									</figure>
								<?php } //termina icono perforación
								if (($row_producto['Diámetro'] <> "") AND ($cuentaDiametro == 1)) { //inicia icono Diametro?>
									<figure>
										<img src="imagenesSitio/productos/iconos/diametro.png" alt="icono"/>
										<div><?php print $row_producto['diametro'] ?></div>
									</figure>
								<?php } //termina icono Diametro
								if (($row_producto['ParaPerfil'] <> "") AND ($row_producto['cuenta'] == 1)){ //inicia icono perfil?>
									<figure>
										<img src="imagenesSitio/productos/iconos/perfil.png" alt="icono"/>
										<div><?php print $row_producto['ParaPerfil'] ?></div>
									</figure>
								<?php } //termina icono perfil de aluminio
								if (($row_producto['aplicacion'] <> "") AND ($row_producto['aplicacion'] == 1)) { //inicia icono aplicación?>
									<figure>
										<img src="imagenesSitio/productos/iconos/<?php print $row_producto['Aplicación'] ?>.png" alt="icono"/>
									</figure>
								<?php } //termina icono aplicación
								if (($row_producto['Acabado'] <> "") AND ($cuentaAcabado == 1)) { //inicia icono acabado?>
									<figure>
										<img src="imagenesSitio/productos/iconos/acabado.png" alt="icono"/>
										<div><?php print $row_producto['Acabado'] ?></div>
									</figure>
								<?php } //termina icono acabado
								if (($row_producto['Material'] <> "") AND ($cuentaMaterial == 1)) { //inicia icono Material?>
									<figure>
										<img src="imagenesSitio/productos/iconos/material.png" alt="icono"/>
										<div><?php print $row_producto['Material'] ?></div>
									</figure>
								<?php } //termina icono Material
								if ($row_producto['Carga'] <> "") { //inicia icono Carga?>
									<figure>
										<img src="imagenesSitio/productos/iconos/carga.png" alt="icono"/>
										<div><?php print $row_producto['Carga'] ?></div>
									</figure>
								<?php } //termina icono Carga
								if ($row_producto['Giro'] <> "") { //inicia icono Giro?>
									<figure>
										<img src="imagenesSitio/productos/iconos/giro.png" alt="icono"/>
										<div><?php print $row_producto['Giro'] ?></div>
									</figure>
								<?php } //termina icono Giro
								if ($row_producto['Vástago'] <> "") { //inicia icono Vastago?>
									<figure>
										<img src="imagenesSitio/productos/iconos/vastago.png" alt="icono"/>
										<div><?php print $row_producto['Vástago'] ?></div>
									</figure>
								<?php } //termina icono Vastago
								if ($row_producto['Adhesión'] <> "") { //inicia icono Adhesión?>
									<figure>
										<img src="imagenesSitio/productos/iconos/adhesion.png" alt="icono"/>
										<div><?php print $row_producto['Adhesión'] ?></div>
									</figure>
								<?php } //termina icono Adhesión
								if ($row_producto['NoHojas'] <> "") { //inicia icono NoHojas?>
									<figure>
										<img src="imagenesSitio/productos/iconos/<?php print $row_producto['NoHojas'] ?>.png" alt="icono"/>
									</figure>
								<?php } //termina icono NoHojas?>
							</span>
	<!-- termina sección de iconos -->
							<?php if ($row_producto['ficha'] <> "") {//inicia if ficha ?>
								<section id="ficha">
									<div id="fichaOrden">
										<span class="ft">FT</span>
										<span>&nbsp;&nbsp;Ficha T&eacute;cnica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									</div>
									<div id="fichaMostrar">
										<span id="FT<?php print $row_producto['codigo'];?>" class="mostrar">Mostrar&nbsp;</span>
									</div>
									<div id="fichaDescarga">
										<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descargar&nbsp;</span>
										<span>
										<a id="down" class="icon-download" href="http://www.cerrajes.me/fichas/<?php print $row_producto['ficha'];?>.pdf" target="_blank" title="Descargar pdf"></a>
										</span>
									</div>
								</section>
							<?php } //termina if ficha?>
							
							<?php if ($row_producto['instructivo'] <> "") {//inicia if instructivo ?>
								<section id="instructivo">
									<div id="instructOrden">
										<span class="ii">&nbsp;II&nbsp;</span>
										<span>&nbsp;&nbsp;Instructivo de Instalaci&oacute;n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									</div>
									<div id="instructMostrar">
										<span id="II<?php print $row_producto['codigo'];?>" class="mostrar">Mostrar&nbsp;</span>
									</div>
									<div id="instructDescarga">
										<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descargar&nbsp;</span>
										<span>
											<a id="down" class="icon-download" href="http://www.cerrajes.me/instructivos/<?php print $row_producto['instructivo'];?>.pdf" target="_blank" title="Descargar pdf"></a>
										</span>
									</div>
								</section>
							<?php } //termina if instructivo?>

						</section><!-- termina sección de información de producto -->

						<figure id="aplicado"> <!-- imagen producto aplicado -->
							<img src="http://cerrajes.me/imgCerrajes/aplicado/<?php print $row_producto['imagenA']?>.png" alt="<?php print $row_producto['imagenA']?>"/>
						</figure>

					</section>

					<article id="vFT<?php print $row_producto['codigo'];?>"> <!-- Mostrar ficha -->
						<figure><img src="http://www.cerrajes.me/imgCerrajes/fichas/<?php print $row_producto['imgF'];?>.jpg" alt=""></figure>
						<!-- <iframe src="fichas/FT-0102-024_242.pdf" width="100%" height="600" type="application/pdf" ></iframe> -->
					</article>

					<article id="vII<?php print $row_producto['codigo'];?>"> <!-- Mostrar instructivo -->
						<figure><img src="http://www.cerrajes.me/imgCerrajes/instructivo/<?php print $row_producto['imgI'];?>.jpg" alt=""></figure>
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