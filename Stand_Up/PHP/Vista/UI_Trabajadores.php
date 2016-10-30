<?php
require_once('../Config/header.php');

/*
 * @Autor Hernan Dario Cardenas
 * @Mail  dropimax@gmail.com
 * @Name UI_Trabajadores
 * @Date 29/10/2016
 *
 * Esta clase contienes los metodo de dibujo de trabajadores
 */

class UI_Trabajadores {

	/*
	 * @Autor Hernan Dario Cardenas
	 * @Mail  dropimax@gmail.com
	 * @Name DibujarTablaTrabajadores
	 * @Parametros $array $id
	 * @Date 29/10/2016
	 * @Return html
	 * Esta dibuja una plantilla de los trabajadores
	 */
	
	function DibujarTablaTrabajadores($array,$id){
		$tpl_trabajador = new SmartyExt();
		$tpl_trabajador->assign("trabajadores",$array);
		$tpl_trabajador->assign("id_tabla",$id);
		return $tpl_trabajador->fetch('../../html/plantillas/Tabla_Trabajadores.tpl.html');
	}
}

?>