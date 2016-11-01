<?php
require_once('../Config/header.php');
require_once('../Modelo/ConsultasTareas.php');
require_once('/UI_Tareas.php');
//==================================
//Declaracion de Objectos y variables
//==================================
    $tpl_principal     = new SmartyExt();
	$obj_cs_trabaja    = new ConsultasTareas();
	$obj_ui_trabaja    = new UI_Tareas();
	$htmlTareas  = "";
	$htmlTrabajador    = "";
//==================================
//Logica 
//==================================
    //Consulta objetos
	$tareas     = $obj_cs_trabaja->fn_consulta_tareas();
	//Tablas
	$htmlTareas = $obj_ui_trabaja->DibujarTablaTareas($tareas,1);
//==================================
//Asignacion y pantilla
//==================================
	//Plantilla principal
	$tpl_principal->assign("htmlTareas",$htmlTareas);
	$tpl_principal->display('../../html/plantillas/tareas_index.tpl.html');
//==================================


?>