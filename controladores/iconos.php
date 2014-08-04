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
		<div><?php print $row_producto['diametroD']; ?></div>
	</figure><?php } //termina icono Diametro
if (($row_producto['ParaPerfil'] <> "") AND ($row_producto['cuenta'] == 1)){ //inicia icono perfil?>
	<figure>
		<img src="imagenesSitio/productos/iconos/perfil.png" alt="icono"/>
		<div><?php print $row_producto['ParaPerfil'] ?></div>
	</figure><?php } //termina icono perfil de aluminio
if (($row_producto['aplicacion'] <> "") AND ($row_producto['cuenta'] == 1)) { //inicia icono aplicación?>
	<figure>
		<img src="imagenesSitio/productos/iconos/<?php print $row_producto['Aplicación'] ?>.png" alt="icono"/>
	</figure><?php } //termina icono aplicación
if ($row_producto['espesor'] <> "") { //inicia icono espesor?>
	<figure>
		<img src="imagenesSitio/productos/iconos/espesor.png" alt="icono"/>
		<div><?php print $row_producto['espesor'] ?></div>
	</figure><?php } //termina icono espesor
if ($row_producto['profundidad'] <> "") { //inicia icono profundidad?>
	<figure>
		<img src="imagenesSitio/productos/iconos/profundidad.png" alt="icono"/>
		<div><?php print $row_producto['profundidad'] ?></div>
	</figure><?php } //termina icono profundidad
if ($row_producto['angulo'] <> "") { //inicia icono angulo?>
	<figure>
		<img src="imagenesSitio/productos/iconos/angulo.png" alt="icono"/>
		<div><?php print $row_producto['angulo'] ?></div>
	</figure><?php } //termina icono angulo
if (($row_producto['cierreD'] <> "")  AND ($cuentaCierre == 1)){ //inicia icono cierre?>
	<figure>
		<img src="imagenesSitio/productos/iconos/cierre.png" alt="icono"/>
		<div><?php print $row_producto['cierreD'] ?></div>
	</figure><?php } //termina icono cierre
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
	</figure><?php } //termina icono NoHojas

	
if ($row_producto['push'] <> "") { //inicia icono push?>
	<figure>
		<img src="imagenesSitio/productos/iconos/<?php print $row_producto['push'] ?>.png" alt="icono"/>
	</figure><?php } //termina icono push
if ($row_producto['smove'] <> "") { //inicia icono smove?>
	<figure>
		<img src="imagenesSitio/productos/iconos/<?php print $row_producto['smove'] ?>.png" alt="icono"/>
	</figure><?php } //termina icono smove
if ($row_producto['voltaje'] <> "") { //inicia icono voltaje?>
	<figure>
		<img src="imagenesSitio/productos/iconos/voltaje.png" alt="icono"/>
		<div><?php print $row_producto['voltaje'] ?></div>
	</figure><?php } //termina icono voltaje
if ($row_producto['consumo'] <> "") { //inicia icono consumo?>
	<figure>
		<img src="imagenesSitio/productos/iconos/consumo.png" alt="icono"/>
		<div><?php print $row_producto['consumo'] ?></div>
	</figure><?php } //termina icono consumo
if ($row_producto['tamaño'] <> "") { //inicia icono tamaño?>
	<figure>
		<img src="imagenesSitio/productos/iconos/tamaño.png" alt="icono"/>
		<div><?php print $row_producto['tamaño'] ?></div>
	</figure><?php } //termina icono tamaño
if ($row_producto['capacidad'] <> "") { //inicia icono capacidad?>
	<figure>
		<img src="imagenesSitio/productos/iconos/capacidad.png" alt="icono"/>
		<div><?php print $row_producto['capacidad'] ?></div>
	</figure><?php } //termina icono capacidad
?>