<?php
require_once('../Config/Smarty.php');
require_once('../Modelo/GestionVistaIndex.php');
require_once('../Config/HTML_LIB.php');
require_once('UI_vista_usuarioFinal.php');
	/** Declaracion de variables */
    $tpl_principal     = new SmartyExt();
	$obj_cs_vistafinal    = new GestionVistaIndex();
	$obj_html           = new HTML_LIB();
	$obj_ui_vistas		= new  UI_vista_usuarioFinal();     
	$htmlvista  = "";
	$forma = $_GET;
	$id=$forma['id_horario'];


	if($id != ""){
	$urls     = $obj_cs_vistafinal->fn_consulta_vistas($id);
  
	
	/** Tablas */
	$htmlvista = $obj_ui_vistas->DibujarVista( $urls );
	
	/** Plantilla principal */
	$tpl_principal->assign( "htmlvista", $htmlvista );
	$tpl_principal->assign( "obj_html",$obj_html);
	$tpl_principal->display('../../HTML/Plantillas/vista_usuarioFinal.tpl.html');	
}else{

	echo "El Link es Inconrrecto";
	die();
	/** Consulta objetos */
}
	
	
?>
