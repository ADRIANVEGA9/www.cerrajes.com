<?php 
if (is_uploaded_file($_FILES['archivo']['tmp_name']))
{
	$destino = 'equipo/pdf'.utf8_decode($_POST['interes']).'/';
	$nombreArchivo = $_FILES['archivo']['name'];
	$tipoArchivo = $_FILES['archivo']['type']; 
	$sizeArchivo = $_FILES['archivo']['size']; 
	$sizeArchivo =  $sizeArchivo/1000;
echo ('Tipo de Archivo: '.$tipoArchivo.'<br> Tamaño de archivo: '.$sizeArchivo.' KB<br>');
	$nombreCompleto = $destino . $nombreArchivo;
	 if (is_file($nombreCompleto))
		 {
			 $idUnico = time();
			 $nombreArchivo = $idUnico . "-" . $nombreArchivo;
		 }   
	     if ( (strpos($tipoArchivo, "pdf")) && ($sizeArchivo < 1000000) )
		    {
		     	if (move_uploaded_file($_FILES['archivo']['tmp_name'], $destino.$nombreArchivo))
		     		{
					echo ('El archivo ha sido guardado en: '.$destino.'<br>con el nombre: '.$nombreArchivo);
					} 
				else
					{ echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
			   		}
	   		}
			else
			{ print ("<br><strong>el archivo debe ser PDF menor a 1MB</strong>");
			}		 
}		 
else
	print ("No se ha podido subir el Archivo <br>");
	print $_FILES['archivo']['error'];
?>