<?php
require_once('../Config/header.php');

/*
 * @Autor Cesar Rodriguez
 * @Mail  crodriguez@gmail.com
 * @Name UI_Horarios
 * @Date 29/10/2016
 *
 * Esta clase contienes los metodo de dibujo de horarios
 */

class UI_Horarios {

	/*
	 * @Autor Hernan Dario Cardenas
	 * @Mail  crodriguez@gmail.com
	 * @Name DibujarTablaHorarios
	 * @Parametros $array $id
	 * @Date 29/10/2016
	 * @Return html
	 * Esta dibuja una plantilla de los horarios
	 */
	
	function DibujarTablaHorarios($array,$id){
		$tpl_trabajador = new SmartyExt();
		$tpl_trabajador->assign("horarios",$array);
		$tpl_trabajador->assign("id_tabla",$id);
		return $tpl_trabajador->fetch('../../html/plantillas/Tabla_Horarios.tpl.html');
	}
}

?>