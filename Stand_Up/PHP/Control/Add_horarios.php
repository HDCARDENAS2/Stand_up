<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionHorarios.php');
//Se crea el objetos
$ajax                  = new CoreAjax();
$o_gestion_horario = new GestionHorarios();
//Datos de la vista
$forma = $_POST;
//logica
$dia_inicio   = $forma['dia_inicio'];
$dia_fin = $forma['dia_fin'];
$hora = $forma['hora'];
if(!$o_gestion_horario->fn_insertar_horarios($dia_inicio, $dia_fin, $hora, $ajax)){
	$ajax->setError("No se pudo insertar la Rutina area.");
}
//retorno objeto ajax
$ajax->RetornarJSON();
?>





