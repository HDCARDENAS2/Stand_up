<?php

class UI_vista_usuarioFinal {
	
	/**
	 * @autor	Luis Leon - Melissa Minotta
	 * @date	11/11/2016
	 */
	function DibujarVista( $array ){
		$tpl_vistaUsuarioFinal = new SmartyExt();
		$tpl_vistaUsuarioFinal->assign( "vistas", $array );
		$tpl_vistaUsuarioFinal->assign ("maximoElementos",count($array));

		return $tpl_vistaUsuarioFinal->fetch('../../HTML/Plantillas/div_dinamico.tpl.html');
	}
}

?>