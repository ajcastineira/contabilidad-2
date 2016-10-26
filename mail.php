<?php 
$destinatario = "andresfelipe9002@gmail.com"; 
$asunto = "Este mensaje es de prueba"; 
$cuerpo = ' 
<html lang="es"> 
<head> 
   <title>Prueba de correo</title> 
   <style>
   .img-responsive, .thumbnail>img, .thumbnail a>img, .carousel-inner>.item>img, .carousel-inner>.item>a>img {
    display: block;
    max-width: 100%;
    height: auto;
}
   </style>
</head> 
<body> 
<h1>Hola amigos!</h1> 
<p>
<img src="http://clasicosbilingues.com/wp-content/uploads/2015/07/banner-contacto.jpg" alt="" class="img-responsive text-center"> <br>

<b>Bienvenidos a mi correo electr&#243;nico de prueba</b>. Estoy encantado de tener tantos lectores. Este cuerpo del mensaje es del artículo de envío de mails por PHP. Habría que cambiarlo para poner tu propio cuerpo. Por cierto, cambia también las cabeceras del mensaje. 
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: A&S Consultores <andresfelipe9002@gmail.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: andresfelipe9002@gmail.com\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: andresfelipe9002@gmail.com\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: andresfelipelopezgallego@hotmail.com\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: andresfelipe9002@gmail.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers) ;

header('Location : contactenos.php');
?>