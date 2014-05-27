<?php
$query_titulo = $db->Execute("SELECT linea.linea, sublinea.sublinea
								FROM linea
								INNER JOIN sublinea ON linea.id_linea = sublinea.id_linea
								WHERE linea.id_linea = '$id_linea' AND sublinea.id_sublinea = '$id_sublinea'");
// Verificamos si hemos realizado bien nuestro Query
if(!$query_titulo){
exit("Error en la consulta titulo");
}

$query_productos = $db->Execute("SELECT *, GROUP_CONCAT( DISTINCT id SEPARATOR  ' - ') AS ids
										 , GROUP_CONCAT( DISTINCT Código SEPARATOR  '<br>') AS codigo, count('ids') AS cuenta
										 , GROUP_CONCAT( UXC SEPARATOR  '<br>') AS uxc
										 , GROUP_CONCAT( DISTINCT UXC SEPARATOR  '<br>') AS uxcD
										 , GROUP_CONCAT( Medida SEPARATOR  '<br>') AS medida
										 , GROUP_CONCAT( Diámetro SEPARATOR  '<br>') AS diametro
										 , GROUP_CONCAT( DISTINCT Diámetro SEPARATOR  '<br>') AS diametroD
										 , GROUP_CONCAT( Freno SEPARATOR  '<br>') AS freno
										 , GROUP_CONCAT( Alto SEPARATOR  '<br>') AS alto
										 , GROUP_CONCAT( Ancho SEPARATOR  '<br>') AS ancho
										 , GROUP_CONCAT( Pistón SEPARATOR  '<br>') AS piston
										 , GROUP_CONCAT( Fuerza SEPARATOR  '<br>') AS fuerza
										 , GROUP_CONCAT( Largo SEPARATOR  '<br>') AS largo
										 , GROUP_CONCAT( ParaPerfil SEPARATOR  '<br>') AS perfil
										 , GROUP_CONCAT( Aplicación SEPARATOR  '<br>') AS aplicacion
										 , GROUP_CONCAT( Material SEPARATOR  '<br>') AS material
										 , GROUP_CONCAT( DISTINCT Material SEPARATOR  '<br>') AS materialD
										 , GROUP_CONCAT( Acabado SEPARATOR  '<br>') AS acabado
										 , GROUP_CONCAT( DISTINCT Acabado SEPARATOR  '<br>') AS acabadoD
										 , GROUP_CONCAT( Orientación SEPARATOR  '<br>') AS orientacion
										 , GROUP_CONCAT( TipoPuerta SEPARATOR  '<br>') AS tipoPuerta
										 , GROUP_CONCAT( DISTINCT TipoPuerta SEPARATOR  '<br>') AS tipoPuertaD
										 , GROUP_CONCAT( complementario SEPARATOR  '<br>') AS complemento
										 , GROUP_CONCAT( opcional SEPARATOR  '<br>') AS opcion
										 , GROUP_CONCAT( Ajuste SEPARATOR  '<br>') AS ajuste
								FROM productos
								WHERE linea = '$id_linea' AND sublinea = '$id_sublinea'
								GROUP BY id
								ORDER BY id ASC");
// Verificamos si hemos realizado bien nuestro Query
//var_dump($db);
//var_dump($query_productos);
//print $db->_errorMsg;
//print $query_productos;
if(!$query_productos){
exit("Error en la consulta productos");
}
?>