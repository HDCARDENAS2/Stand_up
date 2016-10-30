<?php

/*
 * @Autor Hernan Dario Cardenas
 * @Mail  dropimax@gmail.com
 * @Name SmartyExt
 * @Date 29/10/2016
 *
 * Clase de plantillas
 */

require_once('/../libs/smarty/libs/Smarty.class.php');

class SmartyExt extends Smarty {
	
	public function __construct()
	{
		parent::__construct();
		$this->setTemplateDir('/../HTML/Plantillas');
		$this->setCompileDir('/../HTML/Plantillas_c');
		$this->setConfigDir('/../HTML/config');
		$this->setCacheDir('/../HTML/cache');		
	}
}

?>