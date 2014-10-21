<?php
/***VARIABLES POR POST ***/
// $numero1 = count($_POST);
// $tags1 = array_keys($_POST);// obtiene los nombres de las varibles
// $valores1 = array_values($_POST);// obtiene los valores de las varibles

// for($i=0;$i<$numero1;$i++){// crea las variables y les asigna el valor
// $$tags1[$i]=$valores1[$i];
// }
require 'controladores/funciones.php';
//clave pasados por el formulario
$cliente = $_POST['cliente'];
//usa la funcion conexiones() que se ubica dentro de funciones.php
if (conexiones($cliente)){
	//si es valido accedemos a ingreso.php
	header('Location:precios.php');
} else {
	//si no es valido volvemos al formulario inicial
	//$n = 'n';
	header('Location: listaPrecios.php?n=n');
}
?>