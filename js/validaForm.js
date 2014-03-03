//Me permite remplazar valores dentro de una cadena
function str_replace($cambia_esto, $por_esto, $cadena) {
   return $cadena.split($cambia_esto).join($por_esto);
}

//Valida que no sean ingresado ENTER dentro del textarea
function Textarea_Sin_Enter($char, $id){
   //alert ($char);
   $textarea = document.getElementById($id);
   
   if($char == 13){
      $texto_escapado = escape($textarea.value);
      if(navigator.appName == "Opera" || navigator.appName == "Microsoft Internet Explorer") $texto_sin_enter = str_replace("%0D%0A", "", $texto_escapado); 
      else $texto_sin_enter = str_replace("%0A", "", $texto_escapado);      
      $textarea.value = unescape($texto_sin_enter); 
   }
}

function validar(e) { 
    tecla = (document.all) ? e.keyCode : e.which; 
    if (tecla==8) return true; 
    patron =/(^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|Á|É|Í|Ó|Ú|Ñ|Ü|\s)+|^)$/; 
    te = String.fromCharCode(tecla); 
    return patron.test(te); 
} 

function validarNum(e) { 
    tecla = (document.all) ? e.keyCode : e.which; 
    if (tecla==8) return true; 
    patron = /(^([0-9])+|^)$/; 
    te = String.fromCharCode(tecla); 
    return patron.test(te); 
} 

function validarTxtNum(e) { 
    tecla = (document.all) ? e.keyCode : e.which; 
    if (tecla==8) return true; 
    patron =/(^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|Á|É|Í|Ó|Ú|Ñ|Ü|[0-9]|\s)+|^)$/; 
    te = String.fromCharCode(tecla); 
    return patron.test(te); 
} 

function validate1 (form) 
{

  // VARIABLES
  // Variable para controlar si los campos tienen contenido
r=1;

  // TEST DE CAMPOS
  // Si su valor es "" , se alerta, r=0, alerta al usuario y coloca el foco en el campo correspondiente
if (form.nombre.value=="")
	{
		r=0;
		form.nombre.focus();
		form.nombre.style.background = "orangered";
		return false;
	} 
	else 
		{
			var er_nombre = /(^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|Á|É|Í|Ó|Ú|Ñ|Ü|\s)+|^)$/		//letras, '.' y '-' o vacio
			//comprueba campo de nombre
			if(!er_nombre.test(form.nombre.value)) 
			{ 
				form.nombre.select(); 
				form.nombre.focus();
				form.nombre.style.background = "orange";  
				return false;
			}  
		form.nombre.style.background = "white";  	
		}


if (form.apellidos.value=="")
	{
		r=0;
		form.apellidos.focus();
		form.apellidos.style.background = "orangered";
		return false;
	} 
	else 
		{
			var er_apellidos = /(^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|Á|É|Í|Ó|Ú|Ñ|Ü|\s)+|^)$/		//letras, '.' y '-' o vacio
			//comprueba campo de apellidos
			if(!er_apellidos.test(form.apellidos.value)) 
			{ 
				form.apellidos.select(); 
				form.apellidos.focus();
				form.apellidos.style.background = "orange";  
				return false;
			}  
		form.apellidos.style.background = "white";  	
		}

if (form.municipio.value=="")
	{
		r=0;
		form.municipio.focus();
		form.municipio.style.background = "orangered";
		return false;
	} 
	else 
		{
			var er_municipio = /(^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|Á|É|Í|Ó|Ú|Ñ|Ü|\s)+|^)$/		//letras, '.' y '-' o vacio
			//comprueba campo de municipio
			if(!er_municipio.test(form.municipio.value)) 
			{ 
				form.municipio.select(); 
				form.municipio.focus();
				form.municipio.style.background = "orange";  
				return false;
			}  
		form.municipio.style.background = "white";  	
		}

if (form.estado.value=="")
	{
		r=0;
		form.estado.focus();
		form.estado.style.background = "orangered";
		return false;
	} 
	else 
		{
			var er_estado = /(^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|Á|É|Í|Ó|Ú|Ñ|Ü|\s)+|^)$/		//letras, '.' y '-' o vacio
			//comprueba campo de estado
			if(!er_estado.test(form.estado.value)) 
			{ 
				form.estado.select(); 
				form.estado.focus();
				form.estado.style.background = "orange";  
				return false;
			}  
		form.estado.style.background = "white";  	
		}

if (form.ladaT.value=="")
	{
		r=0;
		form.ladaT.focus();
		form.ladaT.style.background = "orangered";
		return false;
	} 
	else 
		{
			var er_ladaT = /(^([0-9])+|^)/		//letras, '.' y '-' o vacio
			//comprueba campo de ladaT
			if(!er_ladaT.test(form.ladaT.value)) 
			{ 
				form.ladaT.select(); 
				form.ladaT.focus();
				form.ladaT.style.background = "orange";  
				return false;
			}  
		form.ladaT.style.background = "white";  	
		}

if (form.telefono.value=="")
	{
		r=0;
		form.telefono.focus();
		form.telefono.style.background = "orangered";
		return false;
	} 
	else 
		{
			var er_telefono = /(^([0-9])+|^)/		//letras, '.' y '-' o vacio
			//comprueba campo de telefono
			if(!er_telefono.test(form.telefono.value)) 
			{ 
				form.telefono.select(); 
				form.telefono.focus();
				form.telefono.style.background = "orange";  
				return false;
			}  
		form.telefono.style.background = "white";  	
		}
		
if (form.correo.value=="")
	{
		r=0;
		form.correo.focus();
		form.correo.style.background = "orangered";
		return false;
	} 
	else 
		{
			var er_correo = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$$/		//letras, '.' y '-' o vacio
			//comprueba campo de correo
			if(!er_correo.test(form.correo.value)) 
			{ 
				form.correo.select(); 
				form.correo.focus();
				form.correo.style.background = "orange";  
				return false;
			}  
		form.correo.style.background = "white";  	
		}
		
if (form.mensaje.value=="")
	{
		r=0;
		form.mensaje.focus();
		form.mensaje.style.background = "orangered";
		return false;
	} 
	else 
		{
			var er_mensaje = /(^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|Á|É|Í|Ó|Ú|Ñ|Ü|[0-9]|\s)+|^)$/		//letras, '.' y '-' o vacio
			//comprueba campo de mensaje
			if(!er_mensaje.test(form.mensaje.value)) 
			{ 
				form.mensaje.select(); 
				form.mensaje.focus();
				form.mensaje.style.background = "orange";  
				return false;
			}  
		form.mensaje.style.background = "white";  	
		}
}