<?php

require_once('../Config/header.php');

class UI_Horarios {

	/**
	 * @autor	Hernan Dario Cardenas
	 * @mail 	crodriguez@gmail.com
	 * @date	29/10/2016
	 */
	function DibujarTablaHorarios( $array, $id, $dias_semana, $obj_html ){
		$tpl_horarios = new SmartyExt();
		$tpl_horarios->assign( "horarios", $array );
		$tpl_horarios->assign( "id_tabla", $id );
		$tpl_horarios->assign( "obj_html", $obj_html );
		$tpl_horarios->assign( "dias_semana", $dias_semana );
		return $tpl_horarios->fetch('../../HTML/Plantillas/Tabla_Horarios.tpl.html');
	}
}

?>