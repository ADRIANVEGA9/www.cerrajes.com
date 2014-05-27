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
		$('#productos #producto #codigo #ficha #'+$idn).addClass('ocultar')
	} 
	if ($('#productos #v'+$idn).css('display') == 'block') {
		$('#productos #producto #codigo #ficha #'+$idn).text('Mostrar ');
		$('#productos #producto #codigo #ficha #'+$idn).removeClass('ocultar')	
	};

	$ft.slideToggle( 300 );
}

	$('#productos #producto #codigo #instructivo .mostrar').click( mostrarOcultarI );

	function mostrarOcultarI(e){
	// console.log(e);
		 $idn = this.id;
		 $txt = $('#productos #producto #codigo #instructivo #'+$idn).text();
		console.log("entré a la función"+$txt);
var $ii  		= $('#productos #v'+$idn);

	$test=$('#productos #v'+$idn).css('display');
	console.log('es none? '+$test);
	if ($('#productos #v'+$idn).css('display') == 'none') {
		$('#productos #producto #codigo #instructivo #'+$idn).text('Ocultar ');
		$('#productos #producto #codigo #instructivo #'+$idn).addClass('ocultar')
	} 
	if ($('#productos #v'+$idn).css('display') == 'block') {
		$('#productos #producto #codigo #instructivo #'+$idn).text('Mostrar ');
		$('#productos #producto #codigo #instructivo #'+$idn).removeClass('ocultar')	
	};

	$ii.slideToggle( 300 );
}