<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionGeneral.php');
	
	session_start();
	
	/** Se crea el objetos */
	$ajax			= new CoreAjax();
	$obj_usuario	= new GestionGeneral();
	
	/** Datos de la vista */
	$forma = $_POST;
	
	/** Tomamos los datos de la forma */
	$login_user		= $forma['user_name'];
	$login_pass		= $forma['user_pass'];
	$agrupacion		= 'USUARIO';
	
	/** Consultamos el usuario registrado en la base de datos y 
	 * comparamos para validar que sea el */
	if( $usuario = $obj_usuario->fn_consulta_usuario( $agrupacion ) ){
		if ( $login_user = $usuario[0] && $login_pass = $usuario[1] ) {
			$SESSION['usuario_valido'] = 1;
			$ajax->setDato('resultado', 1);
		} else {
			$ajax->setError("Usuario o contraseña inválido. Verifique nuevamente.");
		}
	}
	/** Retorno objeto ajax */
	$ajax->RetornarJSON();
	
?>