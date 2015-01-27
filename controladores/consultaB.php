<?php
$query_buscar = $db->Execute("SELECT *, GROUP_CONCAT( DISTINCT id SEPARATOR  ' - ') AS ids
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
										 , GROUP_CONCAT( DISTINCT cierre SEPARATOR  '<br>') AS cierreD
										 , GROUP_CONCAT( complementario SEPARATOR  '<br>') AS complemento
										 , GROUP_CONCAT( DISTINCT complementario SEPARATOR  '<br>') AS complementoD
										 , GROUP_CONCAT( opcional SEPARATOR  '<br>') AS opcion
										 , GROUP_CONCAT( DISTINCT opcional SEPARATOR  '<br>') AS opcionD
										 , GROUP_CONCAT( repuesto SEPARATOR  '<br>') AS repuesto
										 , GROUP_CONCAT( DISTINCT repuesto SEPARATOR  '<br>') AS repuestoD
										 , GROUP_CONCAT( DISTINCT nota SEPARATOR  '<br>') AS notaD
										 , GROUP_CONCAT( Ajuste SEPARATOR  '<br>') AS ajuste
										 , GROUP_CONCAT( Configuracion SEPARATOR  '<br>') AS configuracion
										 , GROUP_CONCAT( color SEPARATOR  '<br>') AS color
										 , GROUP_CONCAT( descripcion2 SEPARATOR  '<br>') AS descripcion2
										 , GROUP_CONCAT( posicion SEPARATOR  '<br>') AS posicion
										 , GROUP_CONCAT( cuello SEPARATOR  '<br>') AS cuello
										 , GROUP_CONCAT( taquete SEPARATOR  '<br>') AS taquete
										 , GROUP_CONCAT( cierre SEPARATOR  '<br>') AS cierre
										 , GROUP_CONCAT( medidaPerfil SEPARATOR  '<br>') AS medidaPerfil
										 , GROUP_CONCAT( tipo SEPARATOR  '<br>') AS tipo
										 , GROUP_CONCAT( inciso SEPARATOR  '<br>') AS inciso
										 , GROUP_CONCAT( plazas SEPARATOR  '<br>') AS plazas
										 , GROUP_CONCAT( charola SEPARATOR  '<br>') AS charola
										 , GROUP_CONCAT( colocacion SEPARATOR  '<br>') AS colocacion
										 , GROUP_CONCAT( canastilla SEPARATOR  '<br>') AS canastilla
										 , GROUP_CONCAT( lados SEPARATOR  '<br>') AS lados
										 , GROUP_CONCAT( medidaMueble SEPARATOR  '<br>') AS medidaMueble
										 , GROUP_CONCAT( carga SEPARATOR  '<br>') AS carga
										 , GROUP_CONCAT( platos SEPARATOR  '<br>') AS platos
										 , GROUP_CONCAT( vasos SEPARATOR  '<br>') AS vasos
										 , GROUP_CONCAT( DISTINCT cierre SEPARATOR  '<br>') AS cierreD
										 , sublinea.sublinea AS sublinea_descripcion
										 , linea.linea AS linea_descripcion
								FROM productos
								INNER JOIN sublinea ON sublinea.id_sublinea = productos.sublinea
								INNER JOIN linea ON productos.linea = linea.id_linea
								WHERE Descripción LIKE '%" . $txt_buscar . "%' 
								OR Código LIKE '%" . $txt_buscar . "%'
								OR complementario LIKE '%" . $txt_buscar . "%'
								OR opcional LIKE '%" . $txt_buscar . "%'
								OR sublinea.sublinea LIKE '%" . $txt_buscar . "%'
								OR linea.linea LIKE '%" . $txt_buscar . "%'
								GROUP BY id,productos.sublinea
								ORDER BY Código ASC");
$totalRows = $query_buscar->_numOfRows;
// Verificamos si hemos realizado bien nuestro Query
//var_dump($db);
//var_dump($query_buscar);
//print $db->_errorMsg;
//print $query_buscar;
if(!$query_buscar){
exit("Error en la consulta buscar");
}