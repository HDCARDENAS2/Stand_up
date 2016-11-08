<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionHorarioTarea.php');
//Se crea el objetos
$ajax                  = new CoreAjax();
$o_gestion_horario_tarea = new GestionHorarioTarea();
//Datos de la vista
$forma = $_POST;
//logica




$index      = $forma['index_select_tabla'];
$id_tabla   = $forma['id_tabla'];

if($index != "" && $id_tabla != ""){

	$codigo     = $forma['id_horario_tarea'.$id_tabla][$index];
	$cod_horario   = $forma['id_horarios'.$id_tabla][$index];
	$cod_rutina = $forma['id_rutinas'.$id_tabla][$index];
	$cod_estado = $forma['cod_estado'.$id_tabla][$index];
	
	if(!$o_gestion_horario_tarea->fn_update_horariotarea($codigo,$cod_horario,$cod_rutina,$cod_estado,$ajax)){
		$ajax->setError("No se pudo modificar el horario tarea.");
	}
	
}else{
	$ajax->setError("El codigo index o tabla id esta vacio.");
}

//retorno objeto ajax
$ajax->RetornarJSON();
?>