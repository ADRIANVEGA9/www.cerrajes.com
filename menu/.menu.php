<?php
include("connections/db.inc.php"); 

$query_menuLinea= $db->Execute("SELECT id_linea, linea
							FROM linea
							ORDER BY id_linea ASC");
// Verificamos si hemos realizado bien nuestro Query
if(!$query_menuLinea){
exit("Error en la consulta Menu linea");
}

?>
<link rel="stylesheet" href="menu/css/styles.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
<script src="js/jquery-1.10.1.min.js"></script>
<div id="tituloProductos" class="<?php if ($ac==13) { echo activo2;}?>"><span>productos</span></div>
	<ul class="menu">
		<?php
		foreach($query_menuLinea as $k => $row_menuLinea) 
		{ 
			$query_menuSublinea= $db->Execute("SELECT id_sublinea, sublinea
										FROM sublinea
										WHERE 	id_linea = $row_menuLinea[id_linea]
										ORDER BY id_sublinea ASC");
			// Verificamos si hemos realizado bien nuestro Query
			if(!$query_menuSublinea){
			exit("Error en la consulta Menu sublinea");
			}
			?>
		<li id="<?php echo $row_menuLinea['id_linea'];?>"><a href="#"><span><?php echo $row_menuLinea['id_linea'];?></span><?php echo $row_menuLinea['linea'];?></a>
			<ul>
				<?php
				foreach($query_menuSublinea as $ks => $row_menuSublinea) 
				{ ?>
				<li id="<?php echo $row_menuSublinea['id_sublinea'];?>"><a href="productos.php?id_linea=<?php echo $row_menuLinea['id_linea'];?>&id_sublinea=<?php echo $row_menuSublinea['id_sublinea'];?>">
					<span><?php echo $row_menuSublinea['id_sublinea'];?></span>
					<?php echo $row_menuSublinea['sublinea'];?></a></li>				
				<?php } ?>
			</ul>
		</li>
		<?php } ?>
	</ul>

<!--initiate accordion-->
<script type="text/javascript">
	function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}

	$(function() {
	
	    var 	idLinea		= getParameterByName('id_linea'),
	    	 	idSublinea	= getParameterByName('id_sublinea'),
	    		menu_ul 	= $('.menu > li > ul'),
	           	menu_a  	= $('.menu > li > a'),
	           	menuLinea	= $('.menu > #'+idLinea+' > a'),
	           	menuUL 		= $('.menu > #'+idLinea+' > ul'),	
	           	menuLI 		= $('.menu > li > ul > #'+idSublinea);	
	    
	    menu_ul.hide();
	    menuLinea.addClass('active');
	    menuUL.show();
	    menuLI.addClass('activo');
	
	    menu_a.click(function(e) { //mouseover cuando mouse se mueva por encima -- mouseenter cuando el mouse entre al objeto --click al dar click
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });


	
	});
</script>
<?php //exit(""); ?>