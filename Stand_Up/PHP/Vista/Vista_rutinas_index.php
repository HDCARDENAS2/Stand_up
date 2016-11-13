<?php
require_once('../Config/header.php');
require_once('../Modelo/GestionRutinas.php');
require_once('/UI_Rutinas.php');
require_once('../Modelo/GestionClasificacion_Rutina.php');
require_once('../Config/HTML_LIB.php');
	
	/** Declaracion de variables */
    $tpl_principal     = new SmartyExt();
	$obj_cs_rutinas    = new GestionRutinas();
	$obj_ui_rutinas    = new UI_Rutinas();
	$obj_clasifica     = new GestionClasificacion_Rutina();
	$obj_html           = new HTML_LIB();
	$htmlRutinas  = "";
	
	/** Consulta objetos */
	$rutinas     = $obj_cs_rutinas->fn_consulta_rutinas();
    $clasificacion = $obj_clasifica->fn_consulta_clasificaciones();
	
	/** Tablas */
	$htmlRutinas = $obj_ui_rutinas->DibujarTablaRutinas( $rutinas, 1 );
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlRutinas", $htmlRutinas );
	$tpl_principal->assign( "clasificacion",$clasificacion);
	$tpl_principal->assign( "obj_html",$obj_html);
	$tpl_principal->assign( "menuhtml", $menuhtml);

	$tpl_principal->display('../../html/plantillas/rutina_index.tpl.html');
	
?>