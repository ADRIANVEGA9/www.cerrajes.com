<?php if (($_SERVER['REMOTE_ADDR']=='195.2.240.101') OR ($_SERVER['REMOTE_ADDR']=='77.41.15.59')){
	header('Location: http://www.google.com');
}?>
<script src="js/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#h01 div:gt(0)').slideToggle(100);
    setInterval(function(){
      $('#h01 div:first-child').slideToggle(600)
         .next('div').slideToggle(500)
         .end().appendTo('#h01');}, 4000);
});
$(function(){
    $('#h02 div:gt(0)').slideToggle(100);
    setInterval(function(){
      $('#h02 div:first-child').slideToggle(600)
         .next('div').slideToggle(600)
         .end().appendTo('#h02');}, 4000);
});
$(function(){
    $('#h03 div:gt(0)').slideToggle(100);
    setInterval(function(){
      $('#h03 div:first-child').slideToggle(800)
         .next('div').slideToggle(800)
         .end().appendTo('#h03');}, 4000);
});
$(function(){
    $('#h04 div:gt(0)').slideToggle(100);
    setInterval(function(){
      $('#h04 div:first-child').slideToggle(1000)
         .next('div').slideToggle(1000)
         .end().appendTo('#h04');}, 4000);
});
</script>
	<script>
	document.createElement('article');
	document.createElement('aside');
	document.createElement('figure');
	document.createElement('figcaption');
	document.createElement('footer');
	document.createElement('header');
	document.createElement('hgroup');
	document.createElement('nav');
	document.createElement('section');
</script><header>
	<section id="internoHome">
		<section id="menu">
				<ul>
					<li><a class="<?php if ($ac==1) { echo "activo1";}?>" href="home.php">Inicio</a></li>
					<li><a class="<?php if ($ac==2) { echo "activo1";}?>" href="qs.php">Quiénes somos</a></li>
					<li><a class="<?php if ($ac==3) { echo "activo1";}?>" href="sucursales.php">Sucursales</a></li>
					<li><a class="<?php if ($ac==4) { echo "activo1";}?>" href="contacto.php">Contacto</a></li>
					<li><a class="<?php if ($ac==5) { echo "activo1";}?>" href="privacidad.php">Aviso de privacidad</a></li>	
					<li><a class="<?php if ($ac==6) { echo "activo1";}?>" href="equipo.php">Forma parte del equipo</a></li>					
				</ul>
		</section>
	</section>
	<section id="home">
		<figure id="imgs">
			<section id="h01">
				<div><a href="productos.php?id_linea=12&id_sublinea=1203"><img src="imagenesSitio/01.png" alt="cerrajes"></a></div>
				<div><a href="productos.php?id_linea=11&id_sublinea=1101"><img src="imagenesSitio/02.png" alt="cerrajes"></a></div>
				<div><a href="productos.php?id_linea=12&id_sublinea=1201"><img src="imagenesSitio/03.png" alt="cerrajes"></a></div>
			</section>
			<section id="h02">
				<div><a href="productos.php?id_linea=11&id_sublinea=1101"><img src="imagenesSitio/04.png" alt="cerrajes"></a></div>
				<div><a href="productos.php?id_linea=11&id_sublinea=1101"><img src="imagenesSitio/05.png" alt="cerrajes"></a></div>
				<div><a href="productos.php?id_linea=12&id_sublinea=1201"><img src="imagenesSitio/06.png" alt="cerrajes"></a></div>
			</section>
			<section id="h03">
				<div><a href="#"><img src="imagenesSitio/07.png" alt="cerrajes"></a></div>
				<div><a href="productos.php?id_linea=11&id_sublinea=1101"><img src="imagenesSitio/08.png" alt="cerrajes"></a></div>
				<div><a href="productos.php?id_linea=12&id_sublinea=1201"><img src="imagenesSitio/09.png" alt="cerrajes"></a></div>
			</section>
			<section id="h04">
				<div><a href="productos.php?id_linea=11&id_sublinea=1101"><img src="imagenesSitio/10.png" alt="cerrajes"></a></div>
				<div><a href="productos.php?id_linea=12&id_sublinea=1201"><img src="imagenesSitio/11.png" alt="cerrajes"></a></div>
				<div><a href="#"><img src="imagenesSitio/12.png" alt="cerrajes"></a></div>
			</section>
		</figure>
		<figure id="logo">
			<img src="imagenesSitio/logo.png" alt="logo cerrajes">
		</figure>
	</section>
</header>