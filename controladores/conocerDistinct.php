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

	$cierre = explode("<br>", $row_producto['cierreD']);
	$cuentaCierre = count($cierre);

	$complemento = explode("<br>", $row_producto['complementoD']);
	$cuentaComplemento = count($complemento);

	$opcion = explode("<br>", $row_producto['opcionD']);
	$cuentaOpcion = count($opcion);

	$nota = explode("<br>", $row_producto['notaD']);
	$cuentaNota = count($nota);
	
	//var_dump($taquete);//var_dump ver el contenido de la variable
	//var_dump($taquete);
?>