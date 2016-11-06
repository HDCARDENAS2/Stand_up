<?php
require_once('../Config/header.php');
require_once('../Modelo/GestionRutinas.php');
require_once('/UI_Rutinas.php');
	
	/** Declaracion de variables */
    $tpl_principal     = new SmartyExt();
	$obj_cs_rutinas    = new GestionRutinas();
	$obj_ui_rutinas    = new UI_Rutinas();
	$htmlRutinas  = "";
	
	/** Consulta objetos */
	$rutinas     = $obj_cs_rutinas->fn_consulta_rutinas();
	
	/** Tablas */
	$htmlRutinas = $obj_ui_rutinas->DibujarTablaRutinas( $rutinas, 1 );
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlRutinas", $htmlRutinas );
	$tpl_principal->display('../../html/plantillas/rutina_index.tpl.html');
	
?>