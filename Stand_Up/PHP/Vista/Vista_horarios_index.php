<?php
require_once('../Config/header.php');
require_once('../Config/HTML_LIB.php');
require_once('../Modelo/GestionHorarios.php');
require_once('/UI_Horarios.php');
	
	/** Declaracion de variables */
    $tpl_principal     = new SmartyExt();
	$obj_cs_horarios    = new GestionHorarios();
	$obj_cs_general   = new GestionGeneral();
	$obj_ui_horarios    = new UI_Horarios();
	$obj_html           = new HTML_LIB();
	$htmlHorarios  = "";
	
    /** Consulta objetos */
	$horarios     = $obj_cs_horarios->fn_consulta_horarios();
	$dias_semana     = $obj_cs_general->fn_consulta_paramtro_grupo('DIAS_SEMANA');
	
	/** Tablas */
	$htmlHorarios = $obj_ui_horarios->DibujarTablaHorarios( $horarios, 1 , $dias_semana, $obj_html);
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlHorarios", $htmlHorarios );
	$tpl_principal->assign("obj_html",$obj_html);
	$tpl_principal->assign("dias_semana",$dias_semana);
	$tpl_principal->display('../../html/plantillas/horarios_index.tpl.html');
	
?>