<?php
require_once('../Config/header.php');
require_once('../Config/HTML_LIB.php');
require_once('../Modelo/GestionTrabajadores.php');
require_once('../Modelo/GestionArea_Laboral.php');
require_once('UI_Trabajadores.php');
	
	/** Declaracion de variables */
	$tpl_principal		= new SmartyExt();
	$obj_cs_trabaja		= new GestionTrabajadores();
	$obj_cs_area_laboral= new GestionArea_Laboral();
	$obj_ui_trabaja		= new UI_Trabajadores();
	$obj_html           = new HTML_LIB();
	$htmlTrabajador		= "";
	
    /** Consulta objetos */
	$trabajadores		= $obj_cs_trabaja->fn_consulta_trabajadores();
	$area_laboral		= $obj_cs_area_laboral->fn_consulta_areas_laboral();
	
	/** Tablas */
	$htmlTrabajadores = $obj_ui_trabaja->DibujarTablaTrabajadores( $trabajadores, 1, $obj_html, $area_laboral, $gn_array_estados );
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlTrabajadores", $htmlTrabajadores );
	$tpl_principal->assign( "menuhtml", $menuhtml);
	$tpl_principal->assign( "obj_html", $obj_html);
	$tpl_principal->assign( "area_laboral", $area_laboral);
	$tpl_principal->display('../../HTML/Plantillas/trabajadores_index.tpl.html');

?>