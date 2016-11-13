<?php

require_once('../Config/Smarty.php');
require_once('../Modelo/GestionGeneral.php');
session_start();
/** Declaracion de Objectos y variables */
$tpl_principal	= new SmartyExt();

$_SESSION["usuario_valido"] = "0";

$tpl_principal->display('../../html/plantillas/index.tpl.html');

?>