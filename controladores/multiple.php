<?php if ($row_producto['codigo'] <> "") { 
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
	if (($row_producto['complemento'] <> "")  AND ((substr($row_producto['complemento'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">complementario</span><br>'.$row_producto['complemento'].'</span>'; }
	if (($row_producto['opcion'] <> "")  AND ((substr($row_producto['opcion'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">opcional</span><br>'.$row_producto['opcion'].'</span>'; }
	if (($row_producto['ajuste'] <> "")  AND ((substr($row_producto['ajuste'], 0, 4)) <> "<br>")){ 
	$i++;
	if ($i>1) { print '<span class="lineaPunteadaCodigo">';} else { print '<span>';}
	print '<span class="titulo">ajuste</span><br>'.$row_producto['ajuste'].'</span>'; }?>