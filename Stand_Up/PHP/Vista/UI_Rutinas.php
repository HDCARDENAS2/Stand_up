<?php

require_once('../Config/header.php');

class UI_Rutinas {
	
	/**
	 * @autor	Alex Alvarado
	 * @mail	alexalvaradomarquez@gmail.com
	 * @date	01/11/2016
	 */
	function DibujarTablaRutinas( $array, $id, $obj_html, $clasificacion){
		$tpl_rutina = new SmartyExt();
		$tpl_rutina->assign( "rutinas", $array );
		$tpl_rutina->assign( "id_tabla", $id );
		$tpl_rutina->assign( "obj_html", $obj_html );
		$tpl_rutina->assign( "clasificacion", $clasificacion );
		return $tpl_rutina->fetch('../../html/plantillas/Tabla_Rutinas.tpl.html');
	}
}

?>