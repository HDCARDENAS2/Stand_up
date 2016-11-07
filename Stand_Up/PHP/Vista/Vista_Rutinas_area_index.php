<?php

require_once('../Config/header.php');
require_once('../Config/HTML_LIB.php');
require_once('../Modelo/GestionRutinasArea.php');
require_once('../Modelo/GestionRutinas.php');
require_once('../Modelo/GestionArea_Laboral.php');
require_once('/UI_Rutinas_area.php');

	$tpl_principal		= new SmartyExt();
	$obj_cs_rutinasarea	= new GestionRutinasArea();
	$obj_ui_rutinasarea	= new UI_Rutinas_area();
	$obj_html           = new HTML_LIB();
	$obj_rutinas        = new GestionRutinas();	
	$obj_areas          = new GestionArea_Laboral();
	$htmlrutinasarea	= "";
    /** Consulta objetos */
	$rutinasareas      = $obj_cs_rutinasarea->fn_consulta_rutinasareas();
	$rutinas           = $obj_rutinas->fn_consulta_rutinas();
	$areas             = $obj_areas->fn_consulta_areas_laboral();
	/** Tablas */
	$htmlrutinasarea   = $obj_ui_rutinasarea->DibujarTablaRutinasArea($rutinasareas,1,$obj_html,$areas,$rutinas,$gn_array_estados);
	/** Plantilla principal */
	$tpl_principal->assign("htmlrutinasarea", $htmlrutinasarea );
	$tpl_principal->assign("menuhtml",$menuhtml);
	$tpl_principal->assign("obj_html",$obj_html);
	$tpl_principal->assign("rutinas",$rutinas);
	$tpl_principal->assign("areas",$areas);
	$tpl_principal->display('../../html/plantillas/rutinas_area.tpl.html');

?>