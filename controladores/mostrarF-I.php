<article class="mostrarFI" id="vFT<?php print $row_producto['Código'];?>"> <!-- Mostrar ficha -->
<ul id="holder">
	<?php //var_dump($row_producto['paginasf']);
	if ($row_producto['paginasf']=='0') { ?>
			<li>
				<figure>
					<img src="http://www.cerrajes.me/imgCerrajes/fichas/<?php print $row_producto['imgF'];?>.jpg" alt="">
				</figure>
			</li>
	<?php }	
	else {
		for ($i=1; $i<=($row_producto['paginasf']); $i++) {
			//var_dump($row_producto['imgF']);
			//var_dump($i);?>
			<li>
				<figure>
					<img src="http://www.cerrajes.me/imgCerrajes/fichas/<?php print $row_producto['imgF'].($i);?>.jpg" alt="">
				</figure>
			</li>
		<?php } //end for 
	} //end else?>
</ul>
</article>

<article class="mostrarFI" id="vII<?php print $row_producto['Código'];?>"> <!-- Mostrar instructivo -->
<ul id="holder">
	<?php //var_dump($row_producto['paginasi']);
	if ($row_producto['paginasi']=='0') { ?>
			<li>
				<figure>
					<img src="http://www.cerrajes.me/imgCerrajes/fichas/<?php print $row_producto['imgI'];?>.jpg" alt="">
				</figure>
			</li>
	<?php }	
	else {
		for ($i=1; $i<=($row_producto['paginasi']); $i++) {
			//var_dump($row_producto['imgI']);
			//var_dump($i);?>
			<li>
				<figure>
					<img src="http://www.cerrajes.me/imgCerrajes/instructivo/<?php print $row_producto['imgI'].($i);?>.jpg" alt="">
				</figure>
			</li>
		<?php } //end for 
	} //end else?>
</ul>
</article>	