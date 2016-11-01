<?php
require_once('../Config/header.php');
require_once('../Modelo/ConsultasClasificacion.php');
require_once('/UI_Clasificacion_Rutina.php');
//==================================
//Declaracion de Objectos y variables
//==================================
    $tpl_principal     = new SmartyExt();
	$obj_cs_trabaja    = new ConsultasClasificacion();
	$obj_ui_trabaja    = new UI_Clasificacion();
	$htmlclasificacion  = "";
	$htmlTrabajador    = "";
//==================================
//Logica 
//==================================
    //Consulta objetos
	$clasificacion     = $obj_cs_trabaja->fn_consulta_clasificacion();
	//Tablas
	$htmlclasificacion = $obj_ui_trabaja->DibujarTablaClasificacion($clasificacion,1);
//==================================
//Asignacion y pantilla
//==================================
	//Plantilla principal
	$tpl_principal->assign("htmlclasificacion",$htmlclasificacion);
	$tpl_principal->display('../../html/plantillas/clasificacion_index.tpl.html');
//==================================


?>