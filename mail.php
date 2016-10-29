<?php 
$nombre = isset($_POST['name']) ? $_POST['name'] : '';
$correo = isset($_POST['email']) ? $_POST['email'] : '';
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

$destinatario = "andresfelipe9002@gmail.com"; 
$asunto = "Consulta Formulario de contacto"; 
$cuerpo = ' 
<html lang="es"> 
<head> 
   <title>Consulta Formulario de contacto</title> 
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/bootstrap-theme.min.css">
   <style>
   .img-responsive, .thumbnail>img, .thumbnail a>img, .carousel-inner>.item>img, .carousel-inner>.item>a>img {
    display: block;
    max-width: 100%;
    height: auto;
}
   </style>
</head> 
<body> 
<img src="http://clasicosbilingues.com/wp-content/uploads/2015/07/banner-contacto.jpg" alt="" class="img-responsive text-center"> <br>
<form class="form-horizontal">
  <div class="form-group">
    <label class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-8">
      <p class="form-control-static">'.$nombre.'</p>
    </div>
    <div class="col-sm-2"></div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Correo</label>
    <div class="col-sm-8">
      <p class="form-control-static">'.$correo.'</p>
    </div>
    <div class="col-sm-2"></div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Mensaje</label>
    <div class="col-sm-8">
      <p class="form-control-static">'.$mensaje.'</p>
    </div>
    <div class="col-sm-2"></div>
  </div>
  
</form>
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: ".$nombre." <".$correo.">\r\n"; 

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