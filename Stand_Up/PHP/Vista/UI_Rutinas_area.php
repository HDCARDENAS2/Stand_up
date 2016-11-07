<?php

require_once('../Config/header.php');

class UI_Rutinas_area {

	/** @Autor	hernan dario cardenas
	 *  @Mail	dropimax@gmail.com
	 */
	
	function DibujarTablaRutinasArea( $array, $id, $obj_html, $lista_areas, $lista_rutinas, $lista_estados ){
		$tpl_rutina_area = new SmartyExt();
		$tpl_rutina_area->assign( "lista_rutina_area", $array );
		$tpl_rutina_area->assign( "id_tabla", $id );
		$tpl_rutina_area->assign( "obj_html", $obj_html );
		$tpl_rutina_area->assign( "lista_areas", $lista_areas );
		$tpl_rutina_area->assign( "lista_rutinas", $lista_rutinas );
		$tpl_rutina_area->assign( "lista_estados", $lista_estados );
		return $tpl_rutina_area->fetch('../../html/plantillas/Tabla_Rutinas_area.tpl.html');
	}
}

?>