<?php
date_default_timezone_set('America/Mexico_City');
// muestra, p.ej.  El último acceso a archivo.txt fue: December 29 2002 22:16:23.


foreach (glob("descarga/*.zip") as $filename) {
   if (file_exists($filename)) {
    	$periodo = time() - fileatime($filename);
    	if ($periodo > 3600) {
    		unlink($filename);
    	}
   	}
}

/*
$nombre_archivo = 'descarga/catalogosCerrajes1411484833.zip';
if (file_exists($nombre_archivo)) {
    echo "El último acceso a $nombre_archivo fue: " . date("F d Y H:i:s.", fileatime($nombre_archivo));
    echo "<br>". date("F d Y H:i:s.",time());
    $periodo = time() - fileatime($nombre_archivo);
    echo "<br>". $periodo. "-" .date("i", $periodo);

    if ($periodo > 3600){
    	$eliminaArchivo = "descarga/catalogosCerrajes1411484833 - copia.zip"; 
		if (unlink($eliminaArchivo)){ 
			echo "<br>Se eliminó el archivo: ".$eliminaArchivo;
		}
    }
}

/*
 $eliminaArchivo = "descarga/catalogosCerrajes1411484833 - copia.zip"; 
 if (unlink($eliminaArchivo)){ 
 echo "<br>Se eliminó el archivo: ".$eliminaArchivo;
 }
*/
/*
foreach (glob("*.jpg") as $filename) {
   echo "$filename size " . filesize($filename) . "\n";
   unlink($filename);
}*/
?>