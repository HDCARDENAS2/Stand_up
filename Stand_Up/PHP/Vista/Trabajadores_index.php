<?php

require_once('../Config/header.php');
require_once('../Modelo/ConsultasHorarios.php');
require_once('/UI_Horarios.php');
	$tpl_principal		= new SmartyExt();
	$obj_cs_trabaja		= new ConsultasTrabajador();
	$obj_ui_trabaja		= new UI_Trabajadores();
	$htmlTrabajador		= "";
	
    /** Consulta objetos */
	$trabajadores     = $obj_cs_trabaja->fn_consulta_trabajador();
	
	/** Tablas */
	$htmlTrabajadores = $obj_ui_trabaja->DibujarTablaTrabajadores( $trabajadores, 1 );
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlTrabajadores", $htmlTrabajadores );
	$tpl_principal->display('../../html/plantillas/trabajadores_index.tpl.html');

?>