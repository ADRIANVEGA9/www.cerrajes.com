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

require 'controladores/consulta.php';

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
<link rel="stylesheet" type="text/css" href="css/paginacion.css" />
<link rel="stylesheet" href="css/responsive.css">
<script src="js/prefixfree.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>


</head>
<body>
<?php require(".header.php") ?>
	<section id="menuProductos">
		<?php 
			require("menu/.menu.php");
			require(".zoom.html"); 
			require(".registro.php");
		?>
	</section>
	<section id="contenedor">
		<?php require(".nav.php") ?>
		<section  id="contenido">
		<?php
		foreach($query_titulo as $t => $row_titulo) 
		{//inicia Titulos linea - sublinea 			print $query_productos;?> 
			<div class="tituloSeccion"><strong><?php echo $row_titulo['linea'];?></strong>
				<span id="sublinea"> / <?php echo $row_titulo['sublinea']; //termina Titulos linea - sublinea?></span>
			</div>	
			<section id="productos">
				<?php } 
					foreach($query_productos as $p => $row_producto)
					{//inicia foreach productos
						require 'controladores/conocerDistinct.php';
				?>

					<section id="producto" class="sombra">
						<figure id="suelto"><!-- imagen de producto "suelto" -->
					<?php if ($row_producto['imagen'] <> '') {?>
							<img src="http://cerrajes.me/imgCerrajes/img/<?php print $row_producto['imagen']?>.png" alt="<?php print $row_producto['imagen']?>"/>
					<?php } ?>
						</figure>
						
						<section id="codigo"><!-- inicia sección de información de producto -->
							<span id="descripcion"><?php print $row_producto['Descripción']; if ($row_producto['cuenta']==1 && $row_producto['Medida'] <> ""){ print ' '.$row_producto['Medida'];}if ($row_producto['cuenta']==1 && $row_producto['calibre'] <> ""){ print ' '.$row_producto['calibre'];}?>
								
								<?php if  ($row_producto['profundidad_cuerda'] <> "")  {								?>
									<br><span>Profundidad de cuerda: <?php print $row_producto['profundidad_cuerda'];?></span>
								<?php } ?>
							</span>

							<span 
							<?php if ($row_producto['imgRecuadro'] == '') { //sino tiene información de recuadro en imagen usa el ancho de codigoUM de lo contrario usa codigoNo
								print 'id="codigoUM"';} else { 
									print 'id="codigoNo"';}?> 
								<?php if ($row_producto['cuenta']>1) { print 'class="altoMinimo"'; }?> 
							><!-- inicia span #codigoUM -->

								<?php if (($row_producto['cuenta']==1) AND ($row_producto['imgRecuadro'] == '')) { //si cuenta es == 1, es un solo código, cuando no tenga imagen de recuadro pone el código?>
									<span>C&oacute;digo: </span><span class="codigo">
									<!-- <a name="<?php //print $row_producto['codigo']?>">--><?php print $row_producto['codigo']?><!-- </a> --></span><br> 
								<?php } //termina código unico

									if ($row_producto['UM']<>'') { ?>														
										<span>UM: <?php print $row_producto['UM'];?></span><br>
								<?php } ?>
								
								<?php if  ( ($row_producto['UXC'] <> "") AND ($cuentaUXC == 1)) {								?>
									<span>UxC: <?php print $row_producto['UXC'];?></span><br>
								<?php } ?>

								<?php if ($row_producto['Logotipo'] <> "") {?>									
									<div id="logo">
										<img src="imagenesSitio/productos/iconos/<?php print $row_producto['Logotipo'] ?>.png" alt="<?php print $row_producto['Logotipo'] ?>"/>
			<!-- 										<?php if ($row_producto['push'] <> "") { //inicia icono push?>
															<img src="imagenesSitio/productos/iconos/<?php print $row_producto['push'] ?>.png" alt="icono"/>
													<?php } //termina icono push
													if ($row_producto['smove'] <> "") { //inicia icono smove?>
															<img src="imagenesSitio/productos/iconos/<?php print $row_producto['smove'] ?>.png" alt="icono"/>
													<?php } //termina icono smove?> -->
									</div>
								<?php } ?>

	<!-- inicia sección de iconos -->
								<?php if (($row_producto['cuenta']>1) AND ($row_producto['imgRecuadro'] == '')) { //iconos para códigos multiples?>
									<span id="iconosM">
										<?php require 'controladores/iconos.php';?>										
									</span>
								<?php } 

									 if ($row_producto['imgRecuadro'] <> '') { //iconos verticales, para cuando se usa imagen para información de recuadro?>
									<span id="iconosV">
										<?php require 'controladores/iconos.php';?>										
									</span>
								<?php } ?>
	<!-- termina sección de iconos -->
							</span><!-- termina span #codigoUM -->

							<span id="codigoMultiple"><!-- inicia span recuadro de información -->
								<?php if ($row_producto['cuenta']>1) 
								{//si cuenta es > 1, es código multiple
									$i=0; 
									if ($row_producto['imgRecuadro'] =='') //si el recuadro de información es una imagen no entra
									{?>									
										<div id="recuadro"><!-- inicia recuadro de información de códigos multiples -->
											<?php require 'controladores/multiple.php';?>
										</div><!-- termina recuadro de información de códigos multiples -->
								<?php 
									} else { //apertura else imgRecuadro, si la información esta como imagen pone la imagen?>

									<img src="http://www.cerrajes.me/imgCerrajes/recuadro/<?php print $row_producto['imgRecuadro'] ?>.png" alt="">
								<?php
									} //cierre else imgRecuadro
								}//Complementos y opcionales para códigos unicos y códigos multiples con mismo complemento u opcional para todos los códigos

								if (($row_producto['imgRecuadro'] <>'') AND ($row_producto['cuenta']==1)) { ?>
									<span id="imgRecuadro<?php if ($row_producto['imagenA']=='0') {print 1;} ?>">Productos que lo conforman</span>
									<img src="http://www.cerrajes.me/imgCerrajes/recuadro/<?php print $row_producto['imgRecuadro'] ?>.png" alt="">									
								<?php }

								if (($row_producto['complementoD'] <> "")  AND ( ($row_producto['cuenta']==1) OR ($cuentaComplemento==1) ) ) {
									print '<div><span class="verde">»</span><span>'.$row_producto['complementoD'].'</span></div>';
								}

								if (($row_producto['opcionD'] <> "")  AND ( ($row_producto['cuenta']==1) OR ($cuentaOpcion==1) ) ) { 
									print '<div><span class="verde"><br>»</span><span>'.$row_producto['opcionD'].'</span></div>';
								}
									
								if (($row_producto['repuestoD'] <> "")  AND ( ($row_producto['cuenta']==1) OR ($cuentaRepuesto==1) ) ) { 
									print '<div><span class="verde"><br>»</span><span>'.$row_producto['repuestoD'].'</span></div>';
								}

								if (($row_producto['notaD'] <> "")  AND ( ($row_producto['cuenta']==1) OR ($cuentaNota==1) ) ) { 
									print '<div><span class="sobrePedido">'.$row_producto['notaD'].'</span></div>';
								}
								 ?>
							</span><!-- termina #codigoMultiple, recuadro de información-->

<!-- inicia sección de iconos unicos-->
							<?php if (($row_producto['cuenta']==1) AND ($row_producto['imgRecuadro'] == '')){ ?>
								<span id="iconos">
									<?php require 'controladores/iconos.php';?>
								</span>
							<?php } ?>
<!-- termina sección de iconos unicos-->


						<?php if ($row_producto['imgF'] <> "") { ?>
							<?php if ($row_producto['ficha'] <> "") {//inicia if ficha ?>
								<section id="ficha">
									<div id="fichaOrden">
										<span class="ft">FT</span>
										<span>&nbsp;&nbsp;Ficha T&eacute;cnica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									</div>
									<div id="fichaMostrar">
										<span id="FT<?php print $row_producto['Código'];?>" class="mostrar">Mostrar&nbsp;</span>
									</div>
									<div id="fichaDescarga">
										<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descargar&nbsp;</span>
										<span>
										<a id="down" class="icon-download" href="http://www.cerrajes.me/fichas/<?php print $row_producto['ficha'];?>.pdf" target="_blank" title="Descargar pdf"></a>
										</span>
									</div>
								</section>
							<?php } //termina if ficha?>
						<?php } ?>
															
						<?php if ($row_producto['imgI'] <> "") { ?>
							<?php if ($row_producto['instructivo'] <> "") {//inicia if instructivo ?>
								<section id="instructivo">
									<div id="instructOrden">
										<span class="ii">&nbsp;II&nbsp;</span>
										<span>&nbsp;&nbsp;Instructivo de Instalaci&oacute;n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									</div>
									<div id="instructMostrar">
										<span id="II<?php print $row_producto['Código'];?>" class="mostrar">Mostrar&nbsp;</span>
									</div>
									<div id="instructDescarga">
										<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descargar&nbsp;</span>
										<span>
											<a id="down" class="icon-download" href="http://www.cerrajes.me/instructivos/<?php print $row_producto['instructivo'];?>.pdf" target="_blank" title="Descargar pdf"></a>
										</span>
									</div>
								</section>
							<?php } //termina if instructivo ?>
						<?php } ?>
							
							<?php if ($row_producto['cc'] <> "") {//inicia if componentes ?>
								<section id="cc">
									<div id="ccOrden">
										<span class="cc">&nbsp;C&nbsp;</span>
										<span>&nbsp;&nbsp;Configuraciones y Componentes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									</div>
									<div id="ccMostrar">
										<span id="CC<?php print $row_producto['Código'];?>" class="mostrar">Mostrar&nbsp;</span>
									</div>
									<div id="ccDescarga">
										<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descargar&nbsp;</span>
										<span>
											<a id="down" class="icon-download" href="http://www.cerrajes.me/instructivos/<?php print $row_producto['cc'];?>.pdf" target="_blank" title="Descargar pdf"></a>
										</span>
									</div>
								</section>
							<?php } //termina if componentes ?>

						</section><!-- termina sección de información de producto -->
  
					<?php if ($row_producto['imagenA'] <> '')  { ?>
						<?php if ($row_producto['imagenA'] <> '0')  { ?>
						<figure id="aplicado"> <!-- imagen producto aplicado -->
							<img src="http://cerrajes.me/imgCerrajes/aplicado/<?php print $row_producto['imagenA']?>.png" alt="<?php print $row_producto['imagenA']?>"/>
						</figure>
						<?php }?>
					<?php }?>

					<?php require'controladores/mostrarF-I.php';?>	

					</section>	

					<div class="ProductosLineaPunteada"></div>

				<?php } //termina foreach productos ?>

			</section>
		</section>

	</section>
	<?php require(".footer.php") ?>

<script src="js/paginacion.js"></script>
<script src="js/mostrar.js"></script>
</body>
</html>	