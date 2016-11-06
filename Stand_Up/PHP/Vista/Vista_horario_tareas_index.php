<?php
require_once('../Config/header.php');
require_once('../Modelo/GestionHorarioTarea.php');
require_once('/UI_HorarioTareas.php');
	
	/** Declaracion de variables */
    $tpl_principal     = new SmartyExt();
	$obj_cs_horario_tareas    = new GestionHorarioTarea();
	$obj_ui_horario_tareas    = new UI_HorarioTareas();
	$htmlHorarioTareas  = "";
	
	/** Consulta objetos */
	$tareas     = $obj_cs_horario_tareas->fn_consulta_horario_tareas();
	
	/** Tablas */
	$htmlHorarioTareas = $obj_ui_horario_tareas->DibujarTablaHorarioTareas( $tareas, 1 );
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlHorarioTareas", $htmlHorarioTareas );
	$tpl_principal->display('../../html/plantillas/horario_tareas_index.tpl.html');
	
?>