<?php

require_once('../Config/header.php');

class UI_AreaLaboral {

	/** 
	 * @autor	Raphael Lara
	 * @mail	lara_d_kli@hotmail.com
	 * @date	31/10/2016
	 */
	function DibujarTablaAreaLaboral( $array, $id ){
		$tpl_area_laboral = new SmartyExt();
		$tpl_area_laboral->assign( "arealaboral", $array );
		$tpl_area_laboral->assign( "id_tabla", $id );
		return $tpl_area_laboral->fetch('../../html/plantillas/Tabla_AreaLaboral.tpl.html');
	}
}

?>