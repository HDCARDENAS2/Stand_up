<?php
require_once('../Config/header.php');
require_once('../Modelo/GestionTrabajadores.php');
require_once('/UI_Trabajadores.php');
//==================================
//Declaracion de Objectos y variables
//==================================
    $tpl_principal     = new SmartyExt();
	$obj_cs_trabaja    = new GestionTrabajadores();
	$obj_ui_trabaja    = new UI_Trabajadores();
	$htmlTrabajadores  = "";
	$htmlTrabajador    = "";
//==================================
//Logica Vista
//==================================
    //Consulta objetos
	$trabajadores     = $obj_cs_trabaja->fn_consulta_trabajadores();
	$trabajador       = $obj_cs_trabaja->fn_consulta_trabajador(1);
	//Tablas
// 	$htmlTrabajadores = $obj_ui_trabaja->DibujarTablaTrabajadores( $trabajadores, 1 );
// 	$htmlTrabajador   = $obj_ui_trabaja->DibujarTablaTrabajadores( $trabajador, 2 );
//==================================
//Asignacion y pantilla
//==================================
	//Plantilla principal
	$tpl_principal->assign("htmlTrabajadores",$htmlTrabajadores);
	$tpl_principal->assign("htmlTrabajador",$htmlTrabajador);
	$tpl_principal->display('../../html/plantillas/index.tpl.html');
//==================================


?>