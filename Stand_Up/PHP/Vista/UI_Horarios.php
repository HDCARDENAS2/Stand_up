<?php

require_once('../Config/header.php');

class UI_Horarios {

	/**
	 * @autor	Hernan Dario Cardenas
	 * @mail 	crodriguez@gmail.com
	 * @date	29/10/2016
	 */
	function DibujarTablaHorarios( $array, $id ){
		$tpl_trabajador = new SmartyExt();
		$tpl_trabajador->assign( "horarios", $array );
		$tpl_trabajador->assign( "id_tabla", $id );
		return $tpl_trabajador->fetch('../../html/plantillas/Tabla_Horarios.tpl.html');
	}
}

?>