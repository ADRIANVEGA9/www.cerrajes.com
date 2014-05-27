<?php 
if ($row_producto['Bandera'] <> "") { //inicia icono Bandera?>
	<figure>
		<img src="imagenesSitio/productos/iconos/<?php print $row_producto['Bandera'] ?>.png" alt="icono"/>
	</figure><?php } //termina icono Bandera
if ($row_producto['Perforación'] <> "") { //inicia icono perforación?>
	<figure>
		<img src="imagenesSitio/productos/iconos/perforacion.png" alt="icono"/>
		<div><?php print $row_producto['Perforación'] ?></div>
	</figure><?php } //termina icono perforación
if (($row_producto['Diámetro'] <> "") AND ($cuentaDiametro == 1)) { //inicia icono Diametro?>
	<figure>
		<img src="imagenesSitio/productos/iconos/diametro.png" alt="icono"/>
		<div><?php print $row_producto['diametro'] ?></div>
	</figure><?php } //termina icono Diametro
if (($row_producto['ParaPerfil'] <> "") AND ($row_producto['cuenta'] == 1)){ //inicia icono perfil?>
	<figure>
		<img src="imagenesSitio/productos/iconos/perfil.png" alt="icono"/>
		<div><?php print $row_producto['ParaPerfil'] ?></div>
	</figure><?php } //termina icono perfil de aluminio
if (($row_producto['aplicacion'] <> "") AND ($row_producto['aplicacion'] == 1)) { //inicia icono aplicación?>
	<figure>
		<img src="imagenesSitio/productos/iconos/<?php print $row_producto['Aplicación'] ?>.png" alt="icono"/>
	</figure><?php } //termina icono aplicación
if (($row_producto['Acabado'] <> "") AND ($cuentaAcabado == 1)) { //inicia icono acabado?>
	<figure>
		<img src="imagenesSitio/productos/iconos/acabado.png" alt="icono"/>
		<div><?php print $row_producto['Acabado'] ?></div>
	</figure><?php } //termina icono acabado
if (($row_producto['Material'] <> "") AND ($cuentaMaterial == 1)) { //inicia icono Material?>
	<figure>
		<img src="imagenesSitio/productos/iconos/material.png" alt="icono"/>
		<div><?php print $row_producto['Material'] ?></div>
	</figure><?php } //termina icono Material
if ($row_producto['Carga'] <> "") { //inicia icono Carga?>
	<figure>
		<img src="imagenesSitio/productos/iconos/carga.png" alt="icono"/>
		<div><?php print $row_producto['Carga'] ?></div>
	</figure><?php } //termina icono Carga
if ($row_producto['Giro'] <> "") { //inicia icono Giro?>
	<figure>
		<img src="imagenesSitio/productos/iconos/giro.png" alt="icono"/>
		<div><?php print $row_producto['Giro'] ?></div>
	</figure><?php } //termina icono Giro
if ($row_producto['Vástago'] <> "") { //inicia icono Vastago?>
	<figure>
		<img src="imagenesSitio/productos/iconos/vastago.png" alt="icono"/>
		<div><?php print $row_producto['Vástago'] ?></div>
	</figure><?php } //termina icono Vastago
if ($row_producto['Adhesión'] <> "") { //inicia icono Adhesión?>
	<figure>
		<img src="imagenesSitio/productos/iconos/adhesion.png" alt="icono"/>
		<div><?php print $row_producto['Adhesión'] ?></div>
	</figure><?php } //termina icono Adhesión
if ($row_producto['NoHojas'] <> "") { //inicia icono NoHojas?>
	<figure>
		<img src="imagenesSitio/productos/iconos/<?php print $row_producto['NoHojas'] ?>.png" alt="icono"/>
	</figure><?php } //termina icono NoHojas?>