<?php
require_once('../Config/header.php');
require_once('../Modelo/ConsultasHorarios.php');
require_once('/UI_Horarios.php');
//==================================
//Declaracion de Objectos y variables
//==================================
    $tpl_principal     = new SmartyExt();
	$obj_cs_trabaja    = new ConsultasHorarios();
	$obj_ui_trabaja    = new UI_Horarios();
	$htmlHorarios  = "";
	$htmlTrabajador    = "";
//==================================
//Logica 
//==================================
    //Consulta objetos
	$horarios     = $obj_cs_trabaja->fn_consulta_horarios();
	//Tablas
	$htmlHorarios = $obj_ui_trabaja->DibujarTablaHorarios($horarios,1);
//==================================
//Asignacion y pantilla
//==================================
	//Plantilla principal
	$tpl_principal->assign("htmlHorarios",$htmlHorarios);
	$tpl_principal->display('../../html/plantillas/horario_index.tpl.html');
//==================================


?>