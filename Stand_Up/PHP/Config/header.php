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
//Menu general
$tpl      = new SmartyExt();
$menuhtml = $tpl->fetch('../../html/plantillas/menu.tpl.html');
//Array de estado de la aplicacion
$gn_array_estados = Array( Array( 'codigo' => 1 , 'valor' => 'Activo') , Array( 'codigo' => 0, 'valor' => 'Inactivo') );

?>