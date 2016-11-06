<?php

require_once('../Config/header.php');

class UI_Trabajadores {

	/** 
	 * @autor	Raphael Lara
	 * @mail	lara_d_kli@hotmail.com
	 * @date	31/10/2016
	 */
	function DibujarTablaTrabajadores( $array, $id ){
		$tpl_trabajador = new SmartyExt();
		$tpl_trabajador->assign( "trabajadores", $array );
		$tpl_trabajador->assign( "id_tabla", $id );
		return $tpl_trabajador->fetch('../../html/plantillas/Tabla_Trabajadores.tpl.html');
	}
}

?>