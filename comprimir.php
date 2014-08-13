<?php
require('lib/pclzip.lib.php');
$zip = new PclZip('descarga/catalogosCerrajes.zip');
 if ($zip->create($a_descargaCatalogo) == 0) {
    die('Error : '.$zip->errorInfo(true));
} else {
	?>
	<a href="descarga/catalogosCerrajes.zip" class="btn btn-default descargaPDF" about="_blank">GUARDAR CATÁLOGOS</a>
	<?php
}
?>
