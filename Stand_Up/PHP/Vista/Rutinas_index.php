<?php
require_once('../Config/header.php');
require_once('../Modelo/ConsultasRutinas.php');
require_once('/UI_Rutinas.php');
//==================================
//Declaracion de Objectos y variables
//==================================
    $tpl_principal     = new SmartyExt();
	$obj_cs_trabaja    = new ConsultasRutinas();
	$obj_ui_trabaja    = new UI_Rutinas();
	$htmlRutinas  = "";
	$htmlTrabajador    = "";
//==================================
//Logica 
//==================================
    //Consulta objetos
	$rutinas     = $obj_cs_trabaja->fn_consulta_rutinas();
	//Tablas
	$htmlRutinas = $obj_ui_trabaja->DibujarTablaRutinas($rutinas,1);
//==================================
//Asignacion y pantilla
//==================================
	//Plantilla principal
	$tpl_principal->assign("htmlRutinas",$htmlRutinas);
	$tpl_principal->display('../../html/plantillas/rutina_index.tpl.html');
//==================================


?>