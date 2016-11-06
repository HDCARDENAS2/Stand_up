<?php
require_once('../Config/header.php');
require_once('../Modelo/GestionHorarios.php');
require_once('/UI_Horarios.php');
	
	/** Declaracion de variables */
    $tpl_principal     = new SmartyExt();
	$obj_cs_horarios    = new GestionHorarios();
	$obj_ui_horarios    = new UI_Horarios();
	$htmlHorarios  = "";
	
    /** Consulta objetos */
	$horarios     = $obj_cs_horarios->fn_consulta_horarios();
	
	/** Tablas */
	$htmlHorarios = $obj_ui_horarios->DibujarTablaHorarios( $horarios, 1 );
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlHorarios", $htmlHorarios );
	$tpl_principal->display('../../html/plantillas/horarios_index.tpl.html');
	
?>