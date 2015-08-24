<?php 
if (isset($_POST['enviar']))
{
$resultado=0;
$destinatario = "info@venezuelatravel.tours"; 
//$destinatario = "ing.aabg@gmail.com". , ."ing.aabg@outlook.com";
//$destinatario  = 'ing.aabg@gmail.com' . ', '; // atención a la coma
//$destinatario .= 'ing.aabg@outlook.com';


$asunto = "Venezuela Travel Tours - Información"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Venezuela Travel Tours</title> 
</head> 
<body> 
	<h4>Mensaje desde Venezuela Travel Tours</h4> 
	<h4>DATOS DEL CLIENTE:</h4>
	<h4>Nombres: '.$_POST["nombres"].'<br></h4>
	<h4>Apellidos: '.$_POST["apellidos"].'<br></h4>
	<h4>Telefono: '.$_POST["tel"].'</h4>
	<h4>Correo: '.$_POST["email"].'<br></h4>
	<p> 
		<strong>Mensaje: </strong>'.$_POST["texto"].'<br><br>
	</p>
	<p>
		Esta es una cuenta de correo no monitoreada, por favor no responder.
	</p>	
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
elseif ($_POST["id_page"]=="/salto.php"){
	header('Location:salto.php?id='.$resultado);
}
elseif ($_POST["id_page"]=="/canaima.php"){
	header('Location:canaima.php?id='.$resultado);
}
elseif ($_POST["id_page"]=="/somos.php"){
	header('Location:somos.php?id='.$resultado);
}
elseif ($_POST["id_page"]=="/venezuela.php"){
	header('Location:venezuela.php?id='.$resultado);
}

}//if (isset($_POST['enviar']))
else {
	header('Location:index.php');
}
?>