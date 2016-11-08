<?php
require_once('../Config/header.php');
require_once('../Config/HTML_LIB.php');
require_once('../Modelo/GestionHorarioTarea.php');
require_once('/UI_HorarioTareas.php');
require_once('../Modelo/GestionHorarios.php');
require_once('../Modelo/GestionRutinas.php');



	/** Declaracion de variables */
    $tpl_principal     = new SmartyExt();
	$obj_cs_horario_tareas    = new GestionHorarioTareas();
	$obj_ui_horario_tareas    = new UI_HorarioTareas();
	$obj_html           = new HTML_LIB();
	$obj_rutinas        = new GestionRutinas();
	$obj_horarios          = new GestionHorarios();
	$htmlHorarioTareas  = "";


	/** Consulta objetos */
	$tareas     = $obj_cs_horario_tareas->fn_consulta_horariotareas();
	$rutinas     = $obj_rutinas->fn_consulta_rutinas();
	$horarios    = $obj_horarios->fn_consulta_horarios();
	
	/** Tablas */
	$htmlHorarioTareas = $obj_ui_horario_tareas->DibujarTablaHorarioTareas( $tareas, 1, $obj_html,$horarios,$rutinas,$gn_array_estados);
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlHorarioTareas", $htmlHorarioTareas );
	$tpl_principal->assign("menuhtml",$menuhtml);
	$tpl_principal->assign("obj_html",$obj_html);
	$tpl_principal->assign("rutinas",$rutinas);
	$tpl_principal->assign("horarios",$horarios);
	$tpl_principal->display('../../html/plantillas/horario_tareas_index.tpl.html');
?>

