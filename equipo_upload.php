<?php 
if (is_uploaded_file($_FILES['archivo']['tmp_name']))
{
	$destino = 'equipo/'.utf8_decode($_POST['interes']).'/';
	$nombreArchivo = $_FILES['archivo']['name'];
	$tipoArchivo = $_FILES['archivo']['type']; 
	$sizeArchivo = $_FILES['archivo']['size']; 
	$sizeArchivo =  number_format(($sizeArchivo/1000000), 2, '.', ',');
	$nombreCompleto = $destino . $nombreArchivo;
	 if (is_file($nombreCompleto))
		 {
			 $idUnico = time();
			 $nombreArchivo = $idUnico . "-" . $nombreArchivo;
		 }   
	     if ( (strpos($tipoArchivo, "pdf")) && ($sizeArchivo < 2) )
		    {
		     	if (move_uploaded_file($_FILES['archivo']['tmp_name'], $destino.$nombreArchivo))
		     		{
				print ("<br>");
				print ("<section id='equipoEnvia'>
							<div name='Regresar' class='guardado' >
							El archivo ha sido enviado, gracias.
							</div>
						</section>");
				require_once("equipo_correo.php");
					} 
				else
					{ 
				print ("<br>");
				print ("<section id='equipoEnvia'>
							<div name='Regresar' class='botonEnvia' >
							Ocurrió algún error al subir el fichero. No pudo guardarse.
							</div>
						</section>");
			   		}
	   		}
			else
			{ 
				print ("<br>");
				print ("<section id='equipoEnvia'>
							<a href='javascript:history.go(-1)''>
							<div name='Regresar' class='botonEnvia' >
							el archivo debe ser <strong>PDF</strong> menor a <strong>2MB</strong> - REGRESAR
							</div>
							</a>
						</section>");
			}		 
}		 
else
	print ("No se ha podido subir el Archivo <br>");
?>