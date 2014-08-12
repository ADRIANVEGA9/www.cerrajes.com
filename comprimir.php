<?php
require('lib/pclzip.lib.php');
$zip = new PclZip('catalogo/catalogosCerrajes.zip');
 if ($zip->create($a_descargaCatalogo) == 0) {
    die('Error : '.$zip->errorInfo(true));
} else {
	?>
	<a href="catalogo/catalogosCerrajes.zip" class="btn btn-default descargaPDF" about="_blank">GUARDAR CATÁLOGOS</a>
	<?php
}
?>
