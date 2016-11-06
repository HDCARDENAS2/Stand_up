<?php
require_once('../Config/header.php');
require_once('../Modelo/GestionArea_Laboral.php');
require_once('/UI_AreaLaboral.php');
	
	/** Declaracion de variables */
	$tpl_principal		= new SmartyExt();
	$obj_cs_arealaboral	= new GestionArea_Laboral();
	$obj_ui_arealaboral	= new UI_AreaLaboral();
	$htmlAreaLaboral		= "";
	
    /** Consulta objetos */
	$arealaboral     = $obj_cs_arealaboral->fn_consulta_areas_laboral();
	
	/** Tablas */
	$htmlAreaLaboral = $obj_ui_arealaboral->DibujarTablaAreaLaboral( $arealaboral, 1 );
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlAreaLaboral", $htmlAreaLaboral );
	$tpl_principal->display('../../html/plantillas/area_laboral_index.tpl.html');

?>