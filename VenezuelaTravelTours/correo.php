<?php 
if (isset($_POST['enviar']))
{
$resultado=0;
$destinatario = "ing.aabg@gmail.com"; 
$asunto = "Only One Travel - Información"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Venezuela Travel Tours</title> 
</head> 
<body> 
<h4>Brokers Venezuela Travel Tours,</h4> 
<p> 
'.$_POST["texto"].'</br>
Telefono de contacto del solicitante: '.$_POST["tel"].'
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: ".$_POST['nombres']. " ". $_POST['apellidos']." ".$_POST['email']."\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

if(mail($destinatario,$asunto,$cuerpo,$headers))
{
    $resultado=1;
}
else {
	$resultado=0;
}

header('Location:index.php?id='.$resultado);
}
else {
	header('Location:index.php');
}
?>