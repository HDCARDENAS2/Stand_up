<?php

require_once('../Config/header.php');

class UI_Rutinas {
	
	/**
	 * @autor	Alex Alvarado
	 * @mail	alexalvaradomarquez@gmail.com
	 * @date	01/11/2016
	 */
	function DibujarTablaRutinas( $array, $id ){
		$tpl_trabajador = new SmartyExt();
		$tpl_trabajador->assign( "rutinas", $array );
		$tpl_trabajador->assign( "id_tabla", $id );
		return $tpl_trabajador->fetch('../../html/plantillas/Tabla_Rutinas.tpl.html');
	}
}

?>