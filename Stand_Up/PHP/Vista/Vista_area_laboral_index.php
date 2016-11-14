<?php
require_once('../Config/header.php');
require_once('../Config/HTML_LIB.php');
require_once('../Modelo/GestionArea_Laboral.php');
require_once('UI_AreaLaboral.php');
	
	/** Declaracion de variables */
	$tpl_principal		= new SmartyExt();
	$obj_cs_arealaboral	= new GestionArea_Laboral();
	$obj_ui_arealaboral	= new UI_AreaLaboral();
	$obj_html           = new HTML_LIB();
	$htmlAreaLaboral	= "";
	
    /** Consulta objetos */
	$arealaboral     = $obj_cs_arealaboral->fn_consulta_areas_laboral();
	
	/** Tablas */
	$htmlAreaLaboral = $obj_ui_arealaboral->DibujarTablaAreaLaboral( $arealaboral, 1, $obj_html, $gn_array_estados );
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlAreaLaboral", $htmlAreaLaboral );
	$tpl_principal->assign( "menuhtml", $menuhtml);
	$tpl_principal->assign( "obj_html", $obj_html);
	$tpl_principal->display('../../HTML/Plantillas/area_laboral_index.tpl.html');

?>