<?php
require('lib/pclzip.lib.php');
$today = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y")); 
$ruta	=	'descarga/catalogosCerrajes'.$today.'.zip';
$zip = new PclZip($ruta);
 if ($zip->create($a_descargaCatalogo,PCLZIP_OPT_TEMP_FILE_OFF,
 					PCLZIP_OPT_REMOVE_PATH, 'catalogos'
                    ) == 0) {
    die('Error : '.$zip->errorInfo(false));
    echo 'No se ha podido generar el .zip, intentalo más tarde.';
} else {
	?>
	<a href="<?php print $ruta; ?>" class="btn btn-default descargaPDF" about="_blank">GUARDAR CATÁLOGOS</a>
	<?php
}
