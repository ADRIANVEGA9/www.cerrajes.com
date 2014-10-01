<?php
date_default_timezone_set('America/Mexico_City');

foreach (glob("descarga/*.zip") as $filename) {
   if (file_exists($filename)) {
    	$periodo = time() - fileatime($filename);
    	if ($periodo > 3600) {
    		unlink($filename);
    	}
   	}
}
?>