<?php
//Guardamos en la variable $html el cuerpo del mensaje
$html = "
<!doctype html>
<html lang=\"es\">
<head>
  <meta charset=\"UTF-8\">
  <title>Cerrajes - Forma parte del equipo</title>
<style type=\"text/css\">
  html {
    height: 100%;
  }
  a {
    color: #71BF44;
    text-decoration: none;
  }
  body{ 
    background-color:#FFFFFF;
    background-size: 100% 100%;
    background-position: center center;
    font-family: Calibri;
    font-size: 16px;
    height: 100%;
    text-align:left;
    margin:0 auto;
    z-index:0;
  }
  h1 {
    color: #666;
  }
  img {
    background-color: #71BF4;
  }
  div {
    color: #333;
  }
  strong {
    color: #467A28;
  }
</style>
</head>
<body>
  <img src='http://www.cerrajes.me/logo.png' alt='Cerrajes'>
  <h1>currículo de ".$_POST['nombre']."</h1>
  <div>
    <strong>Nombre: </strong>".htmlspecialchars($_POST['nombre'])." <br>
    <strong>Estado: </strong>".htmlspecialchars($_POST['estado'])." <br>
    <strong>Área de interés: </strong>".htmlspecialchars($_POST['interes'])." <br>
    <a href='http://cerrajes.com/equipo/".htmlspecialchars($_POST['interes']."/".$nombreArchivo)."'>ver archivo</a>
  </div>
</body>
</html>
";
//Como queremos enviar el mensaje en formato html, colocamos las 2 cabeceras que nos permitirán hacerlo 
$headers = "MIME-Version: 1.0\r\n";  
$headers .= "Content-type: text/html; charset= iso-8859-1\r\n"; 
//Las siguientes 2 cabeceras, permitirán que el destinatario sepa a quién responder y quién le ha enviado el mensaje
$micorreo = "eteran@cerrajes.com";/*lperez@cerrajes.com*/
$headers .= "Reply-To: contacto@cerrajes.com\r\n"; /*contacto@tiendascerrajes.com*/ 
$headers .= "From: Forma parte del equipo - Cerrajes<contacto@cerrajes.com>\r\n";/*contacto@tiendascerrajes.com*/
$headers .= 'Bcc: avega@cerrajes.com' . "\r\n";

ini_set("SMTP","mail.cerrajes.com");/*mail.tiendascerrajes.com*/
ini_set("smtp_port","587");/*25*/
ini_set("sendmail_from","mail.cerrajes.com");	/*mail.tiendascerrajes.com*/
mail($micorreo, "Forma parte del equipo - Cerrajes el herraje ideal para su mueble.\r\n", utf8_decode($html),$headers)or die ("Su mensaje no pudo ser enviado, intente mas tarde.");  
?>					

	
