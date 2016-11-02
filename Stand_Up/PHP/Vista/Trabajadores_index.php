<?php

require_once('../Config/header.php');
require_once('../Modelo/ConsultasTrabajadores.php');
require_once('/UI_Trabajadores.php');
	$tpl_principal		= new SmartyExt();
	$obj_cs_trabaja		= new ConsultasTrabajadores();
	$obj_ui_trabaja		= new UI_Trabajadores();
	$htmlTrabajador		= "";
	
    /** Consulta objetos */
	$trabajadores     = $obj_cs_trabaja->fn_consulta_empleados();
	
	/** Tablas */
	$htmlTrabajadores = $obj_ui_trabaja->DibujarTablaTrabajadores( $trabajadores, 1 );
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlTrabajadores", $htmlTrabajadores );
	$tpl_principal->display('../../html/plantillas/trabajadores_index.tpl.html');

?>