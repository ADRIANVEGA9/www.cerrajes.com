	$('#productos #producto #codigo #ficha .mostrar').click( mostrarOcultarF );

	function mostrarOcultarF(e){
	// console.log(e);
		 $idn = this.id;
		 $txt = $('#productos #producto #codigo #ficha #'+$idn).text();
		console.log("entré a la función"+$txt);
var $ft  		= $('#productos #v'+$idn);

	$test=$('#productos #v'+$idn).css('display');
	if ($('#productos #v'+$idn).css('display') == 'none') {
		$('#productos #producto #codigo #ficha #'+$idn).text('Ocultar ');
		$('#productos #producto #codigo #ficha #'+$idn).addClass('ocultar');
	} 
	if ($('#productos #v'+$idn).css('display') == 'block') {
		$('#productos #producto #codigo #ficha #'+$idn).text('Mostrar ');
		$('#productos #producto #codigo #ficha #'+$idn).removeClass('ocultar');	
	};

	$ft.slideToggle( 300 );
	crearSlide();
}

	$('#productos #producto #codigo #instructivo .mostrar').click( mostrarOcultarI );

	function mostrarOcultarI(e){
	// console.log(e);
		$idn 		= this.id;
		$verSlide	= 0;
		$txt 		= $('#productos #producto #codigo #instructivo #'+$idn).text();
		$ii  		= $('#productos #v'+$idn);
		console.log("entré a la función mostrarOcultarI"+$txt+$idn);

	$test=$('#productos #v'+$idn).css('display');
	console.log('es none? '+$test);
	if ($('#productos #v'+$idn).css('display') == 'none') {
		$('#productos #producto #codigo #instructivo #'+$idn).text('Ocultar ');
		$('#productos #producto #codigo #instructivo #'+$idn).addClass('ocultar');
	} 
	if ($('#productos #v'+$idn).css('display') == 'block') {
		$('#productos #producto #codigo #instructivo #'+$idn).text('Mostrar ');
		$('#productos #producto #codigo #instructivo #'+$idn).removeClass('ocultar');	
	};
	$ii.slideToggle( 300 );
	
	crearSlide();
}

	$('#productos #producto #codigo #cc .mostrar').click( mostrarOcultarCC );

	function mostrarOcultarCC(e){
	// console.log(e);
		$idn 		= this.id;
		$verSlide	= 0;
		$txt 		= $('#productos #producto #codigo #cc #'+$idn).text();
		$ii  		= $('#productos #v'+$idn);
		console.log("entré a la función mostrarOcultarCC"+$txt+$idn);

	$test=$('#productos #v'+$idn).css('display');
	console.log('es none? '+$test);
	if ($('#productos #v'+$idn).css('display') == 'none') {
		$('#productos #producto #codigo #cc #'+$idn).text('Ocultar ');
		$('#productos #producto #codigo #cc #'+$idn).addClass('ocultar');
	} 
	if ($('#productos #v'+$idn).css('display') == 'block') {
		$('#productos #producto #codigo #cc #'+$idn).text('Mostrar ');
		$('#productos #producto #codigo #cc #'+$idn).removeClass('ocultar');	
	};
	$ii.slideToggle( 300 );
	
	crearSlide();
}