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
<script>
	jQuery.preloadImages = function() {
	for(var i = 0; i<arguments.length; i++){
	jQuery("<img>").attr("src", arguments[i]);
	}
	$.preloadImages("http://www.cerrajes.com/imagenesSitio/promociones/promociones-octubre.png");
</script>
</head>
<body>
<?php
require ('controladores/funciones.php');
if (verificar_cliente()){
//aqui debe venir todo el contenido necesario que solo el usuario validado puede acceder
	
	require(".header.php") ?>
	<section id="menuProductos">
		<?php 
			require("menu/.menu.php");
			require(".registro.php") ?>
	</section>
	<section id="contenedor">
		<?php require(".nav.php") ?>
		<section  id="contenido">
			<div class="tituloSeccion"><strong>Promociones</strong><section id="cerrar"><span><?php echo $_SESSION['nombre'];?></span><a href='controladores/salir.php'/>cerrar sesión</a></section></div>	
			<div id="restricciones2" >
				Elige el sistema que necesites 
				<span class="inciso">&nbsp;A&nbsp;</span> 
				<span class="inciso">&nbsp;B&nbsp;</span> 
				<span class="inciso">&nbsp;C&nbsp;</span> 
				<span class="inciso">&nbsp;D&nbsp;</span> 
				<span class="inciso">&nbsp;E&nbsp;</span> 
				<span class="inciso">&nbsp;F&nbsp;</span> 
				<span class="inciso">&nbsp;G&nbsp;</span> 
				<span class="inciso">&nbsp;H&nbsp;</span> 
				y solicítalo enviando un correo a <a class="mailPromo" href="mailto:promociones@cerrajes.com">promociones@cerrajes.com</a>
			</div>
			<section class="promo">
				<figure> <img src="imagenesSitio/promociones/promociones-noviembre_01.png" alt="" usemap="#Map">
                    <map name="Map">
                    <area shape="rect" coords="244,438,337,460" href="http://www.cerrajes.me/fichas/FT-0304-053_056.pdf" target="_blank" alt="Corredera cierre suave">
                    <area shape="rect" coords="638,437,731,459" href="http://www.cerrajes.me/fichas/FT-0304-051.pdf" target="_blank" alt="Clips para corredera">
              		<area shape="rect" coords="9,1212,101,1233" href="http://www.cerrajes.me/fichas/lift_abatible_sencillo_1brazo.pdf" target="_blank" alt="Sistema levadizo SALICE lift abatible sencillo con 1 brazo">
              		<area shape="rect" coords="413,1210,511,1233" href="http://www.cerrajes.me/fichas/lift_abatible_sencillo_2brazos.pdf" target="_blank" alt="Sistema levadizo SALICE lift abatible sencillo con 2 brazos">
                    </map>
				</figure>
				<figure> <img src="imagenesSitio/promociones/promociones-noviembre_02.png" alt="" usemap="#Map2">
                    <map name="Map2">
               		  <area shape="rect" coords="8,545,99,568" href="http://www.cerrajes.me/fichas/lift_abatible_doble_60cm.pdf" target="_blank" alt="Sistema levadizo SALICE lift abatible doble 60cm alto">
                  		<area shape="rect" coords="407,549,497,568" href="http://www.cerrajes.me/fichas/lift_abatible_doble_72cm.pdf" target="_blank" alt="Sistema levadizo SALICE lift abatible doble 72cm alto">
                    </map>
				</figure>
				<figure> <img src="imagenesSitio/promociones/promociones-noviembre_03.png" alt="" usemap="#Map3">
                    <map name="Map3">
              		  <area shape="rect" coords="392,303,483,329" href="http://www.cerrajes.me/fichas/lift_basculante.pdf" target="_blank" alt="Sistema Levadizo SALICE lift basculante">
                  		<area shape="rect" coords="9,1011,98,1030" href="http://www.cerrajes.me/fichas/lift_vertical_36a44.pdf" target="_blank" alt="Sistema levadizo salice de 36 a 44cm">
                  		<area shape="rect" coords="407,1013,497,1031" href="http://www.cerrajes.me/fichas/lift_vertical_44a66.pdf" target="_blank" alt="Sistema levadizo vertical de 44 a 66cm">
                    </map>
				</figure>
				<figure> <img src="imagenesSitio/promociones/promociones-noviembre_04.png" alt="" usemap="#Map4">
                    <map name="Map4">
                  		<area shape="rect" coords="240,410,332,432" href="http://www.cerrajes.me/fichas/FT-1214-021.pdf" target="_blank" alt="Bote de basura SOLO">
						<area shape="rect" coords="643,413,731,434" href="http://www.cerrajes.me/fichas/FT-0207-008_009.pdf" target="_blank" alt="Rodaja plastica con freno">
                    </map>
				</figure>
			</section>
			<div id="restricciones">
				Envía un correo a <a class="mailPromo" href="mailto:promociones@cerrajes.com">promociones@cerrajes.com</a> con tu pedido, indicando los siguientes datos:<br><br>

				<span>Dirección de envío: Calle y No., Colonia, CP, Ciudad, Estado<br></span>
				<span>Teléfono de referencia incluyendo lada<br></span>
				<span>Clave de cliente y RFC al que se facturará<br><br></span>

				Recibirás tu producto en la dirección indicada en un lapso no mayor a 4 días hábiles, el flete esta incluido. <b>ESTE BENEFICIO SE OBTENDRÁ ADQUIRIENDO EL PRODUCTO EN PROMOCIÓN SOLICITÁNDOLO A TRAVÉS DEL MAIL promociones@cerrajes.com</b><br><br>
				Promoción válida del 01 al 31 de Diciembre de 2014 o hasta agotar existencias, revisa los códigos participantes. Promoción exclusiva de Cerrajes México para clientes actuales de Cerrajes México que estén dados de alta en la base de datos, no aplica con otras promociones y descuentos de clientes, los precios ya incluyen IVA, cambios y devoluciones sujetos a revisión del producto.<br><br>
				Si realizas el pedido directamente con tu asesor de ventas el producto se enviará a la sucursal y él te informará el tiempo de entrega del mismo.
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