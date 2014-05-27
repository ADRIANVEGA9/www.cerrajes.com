<?php
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