<?php

require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionHorarios.php');
require_once('../libs/PHPMailer/class.phpmailer.php');
require_once('Constantes.php');
//Se crea el objetos
$ajax                  = new CoreAjax();
$o_gestion_horario = new GestionHorarios();

date_default_timezone_set('America/Bogota');

$hora = date('H:i');

$dia = date('N');

$trabajadores = $o_gestion_horario->fn_consulta_horario_por_hora($hora, $dia);

print "Hora: ".$hora;
print "<br>dia: ".$dia."<br>";

if(count($trabajadores) > 0){

	enviarCorreo($trabajadores);
}



function enviarCorreo($trabajadores){


	$mail             = new PHPMailer();

	$mail->IsSMTP();
	$mail->SMTPDebug  = 0; 

	$mail->SMTPSecure = TLS;                  // set the SMTP port for the GMAIL server
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Host       = SMTP; // SMTP server
	$mail->Port       = 587;  
	$mail->Username   = EMAIL; // SMTP account username
	$mail->Password   = PASSWORD;

	$mail->SetFrom(LABEL_CORREO, ALIAS_CORREO);
	 


	
	foreach ($trabajadores as $key => $value) {
		# code...
		$mail->AddAddress($value['correo']);
		$id = $value['id_horarios'];

	}
	$mail->AddAddress(EMAIL);
	//$id = 1;
	$mail->Subject    = "Hacer las pausas activas"; 

	$mensaje = file_get_contents('../../HTML/Plantillas/template_envio_correo.php');
	$mensaje = str_replace('[mensaje]', "Es importante hacer las pausas activas", $mensaje);
	$mensaje = str_replace('[url]', URL.$id, $mensaje);

	$mail->MsgHTML($mensaje);

	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message sent!";
	}

}


?>