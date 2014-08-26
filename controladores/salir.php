<?php
include ('funciones.php');
if (verificar_cliente()){
	//si el usuario es verificado, se elimina los valores,se destruye la sesion y volvemos al formulario de ingreso
	session_unset();
	session_destroy();
	$parametros_cookies = session_get_cookie_params(); 
	setcookie(session_name(),0,1,$parametros_cookies["path"]);
	header ('Location:../promo.php');
} else {
	//si el usuario no es verificado vuelve al formulario de ingreso
	header ('Location:../promo.php');
}
?>