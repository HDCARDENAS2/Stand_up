<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionHorarios.php');
session_start();

//Se crea el objetos
$ajax                  = new CoreAjax();
$o_gestion_horario = new GestionHorarios();

//Validacion de session
$flag_session = $_SESSION["usuario_valido"];
if($flag_session == 1){
	
//Datos de la vista
$forma = $_POST;
//logica
$dia_inicio   = $forma['dia_inicio'];
$dia_fin = $forma['dia_fin'];
$hora = $forma['hora'];
if(!$o_gestion_horario->fn_insertar_horarios($dia_inicio, $dia_fin, $hora, $ajax)){
	$ajax->setError("No se pudo insertar el horario.");
}

}else{
	$ajax->setError("Usuario no valido en la session.");
}

//retorno objeto ajax
$ajax->RetornarJSON();
?>





