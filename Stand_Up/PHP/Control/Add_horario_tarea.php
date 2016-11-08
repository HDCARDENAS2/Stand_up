<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionHorarioTarea.php');
//Se crea el objetos
$ajax                  = new CoreAjax();
$o_gestion_horario_tarea = new GestionHorarioTareas();
//Datos de la vista
$forma = $_POST;
//logica
$cod_horario   = $forma['id_horario'];
$cod_rutina = $forma['id_rutina'];
if(!$o_gestion_horario_tarea->fn_insertar_horariotarea($cod_horario,$cod_rutina,$ajax)){
	$ajax->setError("No se pudo insertar el horario tarea.");
}
//retorno objeto ajax
$ajax->RetornarJSON();
?>