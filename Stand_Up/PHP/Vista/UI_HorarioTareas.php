<?php

require_once('../Config/header.php');

class UI_HorarioTareas {

	/**
	 * @autor	Luis Leon
	 * @mail	leon9326@gmail.com
	 * @date	31/10/2016
	 */	
	function DibujarTablaHorarioTareas( $array, $id ){
		$tpl_tarea = new SmartyExt();
		$tpl_tarea->assign( "horariotareas", $array );
		$tpl_tarea->assign( "id_tabla", $id );
		return $tpl_tarea->fetch('../../html/plantillas/Tabla_HorarioTareas.tpl.html');
	}
}

?>