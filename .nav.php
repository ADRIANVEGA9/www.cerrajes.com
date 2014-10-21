<nav>
	<table>
		<tr>
			<td><a class="<?php if ($ac==7) { echo "activo2";}?>" href="nuevosProductos.php">nuevos productos</a></td>
			<td><a class="<?php if ($ac==8) { echo "activo2";}?>" href="catalogos.php">catálogos</a></td>
			<td><a class="<?php if ($ac==9) { echo "activo2";}?>" href="videos.php">videos</a></td>
			<td><a class="<?php if ($ac==10) { echo "activo2";}?>" href="noticias.php">noticias</a></td>
			<td><a class="<?php if ($ac==11) { echo "activo2";}?>" href="promociones.php">promociones</a></td>			
			<!-- <td><a class="<?php //if ($ac==15) { echo "activo2";}?>" href="precios.php">lista de precios</a></td>			 -->
			<!-- <td><a class="<?php //if ($ac==14) { echo "activo2";}?>" href="comprar.php">comprar</a></td> -->
			<!-- <td class="cuenta"><div id="cuenta"><a class="<?php //if ($ac==12) { echo "activo2";}?>" href="cuenta.php">mi cuenta</a></div><div class="triangulo_top_right"></div></td>  -->
			<td id="buscar"><a>
				<div class="form-box">
					<form id="form_buscar" action="busqueda.php" method="post">
						<input class="custom-search-box" type="text" name="txt_buscar" size="22" maxlength="150" placeholder="BUSCAR" title="introduce el texto a buscar" required=""> 
						<!-- <input type="submit" value="" class="btn btn-primary" id="btn_buscar"> -->
						<input id="btn_buscar" class="btnSearch btn-primary" alt="Consultar" type="image" src="imagenesSitio/search.png" name="submit" >
					</form>
				</div> </a>
			</td>
		</tr>
	</table>
</nav>