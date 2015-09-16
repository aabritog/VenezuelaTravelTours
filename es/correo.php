<?php 
if (isset($_POST['enviar']))
{
$resultado=0;
$destinatario = "info@venezuelatravel.tours";
//$destinatario = "ing.aabg@gmail.com"; 
//$destinatario = "ing.aabg@gmail.com". , ."ing.aabg@outlook.com";
//$destinatario  = 'ing.aabg@gmail.com' . ', '; // atención a la coma
//$destinatario .= 'ing.aabg@outlook.com';


//$asunto = "Venezuela Travel Tours - Información";
$asunto = "".$_POST['traveldate']." Sr. ".$_POST['nombres']. " ". $_POST['apellidos']." x ".$_POST['passenger']." ".$_POST['destinos']."";

$cuerpo = ' 
<html> 
<head> 
   <title>Venezuela Travel Tours</title> 
</head> 
<body> 
	<h4>Message from Venezuela Travel Tours</h4> 
	<h4>DATOS DEL CLIENTE/CLIENT DATA:</h4>
	<h4>Nombres/First name: '.$_POST["nombres"].'<br></h4>
	<h4>Apellidos/Last name: '.$_POST["apellidos"].'<br></h4>
	<h4>Telefono/Phone: '.$_POST["tel"].'</h4>
	<h4>Correo/Email: '.$_POST["email"].'<br></h4>
	<h4>Fecha de viaje/Travel Date: '.$_POST["traveldate"].'<br></h4>
	<h4>Destinos de interés/Destinations of interest: '.$_POST["destinos"].'<br></h4>
	<h4>Número de pasajeros/Number of passengers: '.$_POST["passenger"].'<br></h4>
	<p> 
		<strong>Mensaje/Message: </strong>'.$_POST["texto"].'<br><br>
	</p>
		<br><br>
		Esta es una cuenta de correo no monitoreada, por favor no responder.
		<br>
		Venezuela Travel Tours	
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
//$headers .= "From: ".$_POST['nombres']. " ". $_POST['apellidos']." ".$_POST['email']."\r\n";
//$headers .= "From: info@venezuelatravel.tours\r\n";
$headers .= "From: Web Site Venezuela Travel Tours no-reply@venezuelatravel.tours\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

//if(mail($destinatario,$asunto,$cuerpo,$headers))
if(mail($destinatario,$asunto,$cuerpo,$headers))
{
    $resultado=1;
}
else {
	$resultado=0;
}


if ($_POST["id_page"]=="/index.php"){
	header('Location:index.php?id='.$resultado);
}
elseif ($_POST["id_page"]=="/salto-angel.php"){
	header('Location:salto-angel.php?id='.$resultado);
}
elseif ($_POST["id_page"]=="/parque-canaima.php"){
	header('Location:parque-canaima.php?id='.$resultado);
}
elseif ($_POST["id_page"]=="/quienes-somos.php"){
	header('Location:quienes-somos.php?id='.$resultado);
}
elseif ($_POST["id_page"]=="/venezuela.php"){
	header('Location:venezuela.php?id='.$resultado);
}
elseif ($_POST["id_page"]=="/los-roques.php"){
	header('Location:los-roques.php?id='.$resultado);
}
elseif ($_POST["id_page"]=="/isla-de-margarita.php"){
	header('Location:isla-de-margarita.php?id='.$resultado);
}
elseif ($_POST["id_page"]=="/orinoco-delta.php"){
	header('Location:orinoco-delta.php?id='.$resultado);
}
elseif ($_POST["id_page"]=="/estado-merida.php"){
	header('Location:estado-merida.php?id='.$resultado);
}
elseif ($_POST["id_page"]=="/los-llanos-venezuela.php"){
	header('Location:los-llanos-venezuela.php?id='.$resultado);
}
}//if (isset($_POST['enviar']))
else {
	header('Location:index.php');
}
?>