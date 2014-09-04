<?php 
	if (($row_producto['inciso'] <> "") AND ((substr($row_producto['inciso'], 0, 4)) <> "<br>")) { 
	print '<span class="verde"><span class="titulo"></span><br>'.$row_producto['inciso'].'</span>';}

	if ($row_producto['codigo'] <> "") { 
	$i=1; print '<span><span class="titulo">CÓDIGO</span><br>'.$row_producto['codigo'].'</span>'; }
?>
<?php if (($row_producto['Medida'] <> "") AND ((substr($row_producto['medida'], 0, 4)) <> "<br>")) { 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">MEDIDA</span><br>'.$row_producto['medida'].'</span>';}
	if ((($row_producto['uxc'] <> "")  AND ((substr($row_producto['uxc'], 0, 4)) <> "<br>")) AND ($cuentaUXC>1)){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">UXC</span><br>'.$row_producto['uxc'].'</span>'; }
	if ((($row_producto['diametro'] <> "")  AND ((substr($row_producto['diametro'], 0, 4)) <> "<br>")) AND ($cuentaDiametro>1)){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">diametro</span><br>'.$row_producto['diametro'].'</span>'; }
	if (($row_producto['freno'] <> "") AND ((substr($row_producto['freno'], 0, 4)) <> "<br>")) { 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">FRENO</span><br>'.$row_producto['freno'].'</span>'; }
	if (($row_producto['alto'] <> "") AND ((substr($row_producto['alto'], 0, 4)) <> "<br>")) { 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">alto</span><br>'.$row_producto['alto'].'</span>'; }
	if (($row_producto['ancho'] <> "")  AND ((substr($row_producto['ancho'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">ancho</span><br>'.$row_producto['ancho'].'</span>'; }
	if (($row_producto['piston'] <> "")  AND ((substr($row_producto['piston'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">pistón</span><br>'.$row_producto['piston'].'</span>'; }
	if (($row_producto['fuerza'] <> "")  AND ((substr($row_producto['fuerza'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">fuerza</span><br>'.$row_producto['fuerza'].'</span>'; }
	if (($row_producto['largo'] <> "")  AND ((substr($row_producto['largo'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">largo</span><br>'.$row_producto['largo'].'</span>'; }
	if (($row_producto['perfil'] <> "")  AND ((substr($row_producto['perfil'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">medidas</span><br>'.$row_producto['perfil'].'</span>'; }
	if (($row_producto['aplicacion'] <> "")  AND ((substr($row_producto['aplicacion'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">aplicación</span><br>'.$row_producto['aplicacion'].'</span>'; }
	if (($row_producto['orientacion'] <> "")  AND ((substr($row_producto['orientacion'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">orientación</span><br>'.$row_producto['orientacion'].'</span>'; }
	if ((($row_producto['TipoPuerta'] <> "")  AND ((substr($row_producto['tipoPuerta'], 0, 4)) <> "<br>")) AND ($tipoPuerta>1)){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">Tipo de puerta</span><br>'.$row_producto['tipoPuerta'].'</span>';}
	if ((($row_producto['material'] <> "")  AND ((substr($row_producto['material'], 0, 4)) <> "<br>")) AND ($cuentaMaterial>1)){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">material</span><br>'.$row_producto['material'].'</span>'; }
	if ((($row_producto['acabado'] <> "")  AND ((substr($row_producto['acabado'], 0, 4)) <> "<br>")) AND ($cuentaAcabado>1)){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">acabado</span><br>'.$row_producto['acabado'].'</span>'; }
	if (($row_producto['complemento'] <> "")  AND ((substr($row_producto['complemento'], 0, 4)) <> "<br>")  AND ((substr($row_producto['complemento'], 0, 4)) <> "Comp")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">complementario</span><br>'.$row_producto['complemento'].'</span>'; }
	if (($row_producto['opcion'] <> "")  AND ((substr($row_producto['opcion'], 0, 4)) <> "<br>")  AND ((substr($row_producto['opcion'], 0, 4)) <> "Opci")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">opcional</span><br>'.$row_producto['opcion'].'</span>'; }
	if (($row_producto['repuesto'] <> "")  AND ((substr($row_producto['repuesto'], 0, 4)) <> "<br>")  AND ((substr($row_producto['repuesto'], 0, 4)) <> "Repu")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">repuesto</span><br>'.$row_producto['repuesto'].'</span>'; }
	if (($row_producto['ajuste'] <> "")  AND ((substr($row_producto['ajuste'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">ajuste</span><br>'.$row_producto['ajuste'].'</span>'; }
	if (($row_producto['configuracion'] <> "")  AND ((substr($row_producto['configuracion'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">configuraciones</span><br>'.$row_producto['configuracion'].'</span>'; }
	if (($row_producto['color'] <> "")  AND ((substr($row_producto['color'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">acabado</span><br>'.$row_producto['color'].'</span>'; }
	if (($row_producto['posicion'] <> "")  AND ((substr($row_producto['posicion'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">posición</span><br>'.$row_producto['posicion'].'</span>'; }
	if (($row_producto['descripcion2'] <> "")  AND ((substr($row_producto['descripcion2'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">descripción</span><br>'.$row_producto['descripcion2'].'</span>'; }
	if (($row_producto['cuello'] <> "")  AND ((substr($row_producto['cuello'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">cuello</span><br>'.$row_producto['cuello'].'</span>'; }
	if ((($row_producto['cierre'] <> "")  AND ((substr($row_producto['cierre'], 0, 4)) <> "<br>")) AND ($cuentaCierre>1)){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">cierre lento</span><br>'.$row_producto['cierre'].'</span>'; }
	if (($row_producto['taquete'] <> "")  AND ((substr($row_producto['taquete'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">taquete</span><br>'.$row_producto['taquete'].'</span>'; }
	if (($row_producto['medidaPerfil'] <> "")  AND ((substr($row_producto['medidaPerfil'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">Medida del Perfil</span><br>'.$row_producto['medidaPerfil'].'</span>'; }
	if (($row_producto['tipo'] <> "")  AND ((substr($row_producto['tipo'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">tipo</span><br>'.$row_producto['tipo'].'</span>'; }
	if (($row_producto['plazas'] <> "")  AND ((substr($row_producto['plazas'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">plazas</span><br>'.$row_producto['plazas'].'</span>'; }
	if (($row_producto['charola'] <> "")  AND ((substr($row_producto['charola'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">charola</span><br>'.$row_producto['charola'].'</span>'; }
	if (($row_producto['colocacion'] <> "")  AND ((substr($row_producto['colocacion'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">colocación</span><br>'.$row_producto['colocacion'].'</span>'; }
	if (($row_producto['canastilla'] <> "")  AND ((substr($row_producto['canastilla'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">canastilla</span><br>'.$row_producto['canastilla'].'</span>'; }
	if (($row_producto['lados'] <> "")  AND ((substr($row_producto['lados'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">lados</span><br>'.$row_producto['lados'].'</span>'; }
	if (($row_producto['medidaMueble'] <> "")  AND ((substr($row_producto['medidaMueble'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">medida del mueble</span><br>'.$row_producto['medidaMueble'].'</span>'; }
	if (($row_producto['carga'] <> "")  AND ((substr($row_producto['carga'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">carga</span><br>'.$row_producto['carga'].'</span>'; }
	if (($row_producto['calibre'] <> "")  AND ((substr($row_producto['calibre'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">calibre</span><br>'.$row_producto['calibre'].'</span>'; }
	if (($row_producto['tornillo'] <> "")  AND ((substr($row_producto['tornillo'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">tornillo</span><br>'.$row_producto['tornillo'].'</span>'; }
?>