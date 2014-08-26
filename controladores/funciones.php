<?php
//funcion para conectar a la base de datos y verificar la existencia del cliente
function conexiones($cliente) {
	//conexion con el servidor de base de datos MySQL
	include("connections/db.inc.php"); 

	//sentencia sql para consultar el nombre del cliente
	$query_cliente = $db->Execute("SELECT *
								FROM clientes
								WHERE Codigo = '$cliente'
								");
	// Verificamos si hemos realizado bien nuestro Query
	if(!$query_cliente){
	exit("Error en la consulta Cliente");
	}
	$totalRows = $query_cliente->_numOfRows;
	$nombre	= $query_cliente->fields['Nombre'];
	//si existe inicia una sesion y guarda el nombre del cliente
	if ($totalRows!=0){
		//inicio de sesion
		session_start();
		//configurar un elemento cliente dentro del arreglo global $_SESSION
		$_SESSION['cliente']=$cliente; 
		$_SESSION['nombre']=$nombre; 
		//retornar verdadero
		return true;
	} else {
		//retornar falso
		return false;
	}
}
//funcion para verificar que dentro del arreglo global $_SESSION existe el nombre del cliente
function verificar_cliente(){
	//continuar una sesion iniciada
	session_start();
	//comprobar la existencia del cliente
	if ($_SESSION['cliente']){
		return true;
	}
}
?>