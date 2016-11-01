<?php
require_once('../Config/header.php');

/*
 * @Autor Alex Alvarado
 * @Mail  alexalvaradomarquez@gmail.com
 * @Name UI_Rutinas
 * @Date 01/11/2016
 *
 * Esta clase contienes los metodo de dibujo de rutinas
 */

class UI_Rutinas {

		
	function DibujarTablaRutinas($array,$id){
		$tpl_trabajador = new SmartyExt();
		$tpl_trabajador->assign("rutinas",$array);
		$tpl_trabajador->assign("id_tabla",$id);
		return $tpl_trabajador->fetch('../../html/plantillas/Tabla_Rutinas.tpl.html');
	}
}

?>