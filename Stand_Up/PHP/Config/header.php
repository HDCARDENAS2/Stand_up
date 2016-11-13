<?php

/*
 * @Autor Hernan Dario Cardenas
 * @Mail  dropimax@gmail.com
 * @Name header
 * @Date 29/10/2016
 *
 * Clase de header
 */


require_once('/smarty.php');
require_once('../Modelo/GestionGeneral.php');
session_start();

//Menu general
$tpl      = new SmartyExt();

//Validacion de usuario
if( $_SESSION["usuario_valido"] == 1){
	$menuhtml = $tpl->fetch('../../html/plantillas/menu.tpl.html');
	//Array de estado de la aplicacion
	$obj_general = new GestionGeneral();
	$gn_array_estados = $obj_general->fn_consulta_paramtro_grupo('ESTADOS');
}else{
	$tpl->display('../../html/plantillas/index.tpl.html');
    die();
}

?>