<?php
require_once('../Config/header.php');
require_once('../Config/HTML_LIB.php');
require_once('../Modelo/GestionClasificacion_Rutina.php');
require_once('/UI_Clasificacion_Rutina.php');

	/** Declaracion de variables */
    $tpl_principal     = new SmartyExt();
	$obj_cs_clasificacion_rutina    = new GestionClasificacion_Rutina();
	$obj_ui_clasificacion_rutina    = new UI_Clasificacion_Rutina();
	$obj_html           = new HTML_LIB();
	$htmlclasificacion  = "";

	
    /** Consulta objetos */
	$clasificacion_rutina = $obj_cs_clasificacion_rutina->fn_consulta_clasificaciones();
	
	/** Tablas */
	$htmlclasificacion = $obj_ui_clasificacion_rutina->DibujarTablaClasificacionRutina( $clasificacion_rutina, 1,$obj_html,$gn_array_estados );
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlclasificacion", $htmlclasificacion );
	$tpl_principal->assign( "menuhtml", $menuhtml);
	$tpl_principal->display('../../html/plantillas/clasificacion_index.tpl.html');
	$tpl_principal->assign( "obj_html", $obj_html);

?>