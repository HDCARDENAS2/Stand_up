<?php
require_once('../Config/Smarty.php');
require_once('../Modelo/GestionGeneral.php');
	
	/** Declaracion de Objectos y variables */
    $tpl_principal	= new SmartyExt();
    
	$tpl_principal->display('../../html/plantillas/index.tpl.html');
	
?>