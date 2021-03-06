<!DOCTYPE html>
<?php $ac = 100;
include("connections/DB.inc.php"); 
/***VARIABLES POR POST ***/
$numero1 = count($_POST);
$tags1 = array_keys($_POST);// obtiene los nombres de las varibles
$valores1 = array_values($_POST);// obtiene los valores de las varibles

for($i=0;$i<$numero1;$i++){// crea las variables y les asigna el valor
$$tags1[$i]=$valores1[$i];
}

if (@$txt_buscar<>"") {
  $txt_buscar = htmlspecialchars($txt_buscar);
} else {
	$txt_buscar='&nbsp;';
}
require 'controladores/consultaB.php';

?>
<html lang="es">
<head>
<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> -->
<link rel="shortcut icon" href="favicon.ico">
<title>Cerrajes&reg; el herraje ideal para su mueble... - Búsqueda</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" type="text/css" href="css/paginacion.css" />
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/estilos.css">
<script src="js/prefixfree.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body>
<?php require(".header.php") ?>
	<section id="menuProductos">
		<?php 
			require("menu/.menu.php");
			require(".zoom.html"); 
			require(".registro.php") ?>
	</section>
	<section id="contenedor">
		<?php require(".nav.php") ?>
		<section  id="contenido">
			<div class="tituloSeccion">
				<?php if ($totalRows==0) { ?>
					<strong>No se encontraron coincidencias con '<?php echo htmlspecialchars($txt_buscar);?>'</strong></div>
				<?php } else {?>
				<strong>Se encontraron  <?php echo $totalRows .' coincidencias con \''.htmlspecialchars($txt_buscar);?>'</strong></div>
				<?php }?>
			<section id="productos">
				<?php  
					foreach($query_buscar as $p => $row_producto)
					{//inicia foreach buscar
						require 'controladores/conocerDistinct.php';
				?>

					<section id="producto" class="sombra">
						<figure id="suelto"><!-- imagen de producto "suelto" -->
					<?php if ($row_producto['imagen'] <> '') {?>
						<a class="fancybox" rel="group" href="http://cerrajes.me/imgCerrajes/imagenesG/<?php print $row_producto['imagenG']?>.jpg" title="<?php print $row_producto['Descripción']?>" data-fancybox-width="591" data-fancybox-height="591">
							<img src="http://cerrajes.me/imgCerrajes/img/<?php print $row_producto['imagen']?>.png" alt="<?php print  $row_producto['imagen'] ?> "/>
						</a>
					<?php } ?>
						</figure>
						
						<section id="codigo"><!-- inicia sección de información de producto -->
							<span id="lineaB"><?php print $row_producto['linea'].' - '.$row_producto['sublinea']?></span>
							<span id="descripcion"><?php print $row_producto['Descripción'].' '.$row_producto['noParte'].' '; if ($row_producto['cuenta']==1 && $row_producto['Medida'] <> ""){ print $row_producto['Medida'];}?>
								
								<?php if  ($row_producto['tornillo'] <> "")  {								?>
									<br><span>Tornillo: <?php print $row_producto['tornillo'];?></span>
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
								
								<?php if  ( ($row_producto['UXC'] <> "") AND ($cuentaUXC == 1)) {?>
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

						<?php if ($row_producto['imagenA'] <> '')  { 
							  if ($row_producto['imagenA'] <> '0')  { ?>
						<figure id="aplicado"> <!-- imagen producto aplicado -->
							<img src="http://cerrajes.me/imgCerrajes/aplicado/<?php print $row_producto['imagenA']?>.png" alt="<?php print $row_producto['imagenA']?>"/>
						</figure>
						<?php }
						 }?>

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

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="fancybox/jquery.fancybox-media.js?v=1.0.6"></script>

<script type="text/javascript">
jQuery.noConflict();//resuelve el conflicto entre el zoom y el fancybox, cambiar el signo de $ por jQuery
	jQuery(document).ready(function() {
		jQuery(".fancybox")
    		.attr('rel', 'gallery')
			.fancybox({
		        type: 'iframe',
		        autoSize : false,
		        beforeLoad : function() {         
		            this.width  = parseInt(this.element.data('fancybox-width'));  
		            this.height = parseInt(this.element.data('fancybox-height'));
		        }
					// openEffect : 'none',
					// closeEffect : 'none',
					// prevEffect : 'none',
					// nextEffect : 'none',

					// arrows : true,
					// helpers : {
					// 	title : {
					// 		type : 'outside'
					// 	},
					// 	media : {},
					// 	buttons : {}
					// }
			});
	});
</script>
</body>
</html>	