<?php
echo $_POST['interes'];
 
if (is_uploaded_file($_FILES['archivo']['tmp_name']))
{
 $destino = 'equipo/pdf'.utf8_decode($_POST['interes']).'/';
 $nombreFichero = $_FILES['archivo']['name'];
 echo ('destino = '.$destino);
$nombreCompleto = $destino . $nombreFichero;
 if (is_file($nombreCompleto))
 {
 $idUnico = time();
 $nombreFichero = $idUnico . "-" . $nombreFichero;
 }
 //Verifica el tamaño del archivo (en este caso es de 10MB)     
     if($HTTP_POST_FILES['archivo']['size'] < 10000000) {
 
		move_uploaded_file($_FILES['archivo']['tmp_name'], $destino.$nombreFichero);
		echo (utf8_decode($_POST['interes']).'El archivo ha sido guardado en: '.$nombreDirectorio.' con el nombre: '.$nombreFichero);
		echo $_FILES['archivo']['error'];
	} else
	{
		print ("el archivo debe ser menor a 10 MB");
	}
 
}
 
else
 print ("No se ha podido subir el fichero");
?>