<?php

require_once('../Config/header.php');

class UI_HorarioTareas {

	/**
	 * @autor	Luis Leon
	 * @mail	leon9326@gmail.com
	 * @date	31/10/2016
	 */	
	function DibujarTablaHorarioTareas( $array, $id, $obj_html,$lista_horarios,$lista_rutinas,$lista_estados ){
		$tpl_horario_tarea = new SmartyExt();
		$tpl_horario_tarea->assign( "lista_horario_tarea", $array );
		$tpl_horario_tarea->assign( "id_tabla", $id );
		$tpl_horario_tarea->assign( "obj_html", $obj_html );
		$tpl_horario_tarea->assign( "lista_horarios", $lista_horarios );
		$tpl_horario_tarea->assign( "lista_rutinas", $lista_rutinas );
		$tpl_horario_tarea->assign( "lista_estados", $lista_estados );
		return $tpl_horario_tarea->fetch('../../html/plantillas/Tabla_HorarioTareas.tpl.html');
	}
	
}

?>

