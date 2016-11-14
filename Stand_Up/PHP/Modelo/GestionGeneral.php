<?php

require_once('../Config/ConexionBD.php');

class GestionGeneral {

	/** @Autor	Raphael Lara
	 *  @Mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_paramtro_grupo ( $dato, $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('SELECT valor,descripcion FROM lista_valores where agrupacion=?');
			$bd->setParametro($dato);

			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionGeneral::fn_consulta_paramtro_grupo');
		}

		$bd->Cerrar();
		return $array;

	}
	
	/** @Autor	Raphael Lara
	 *  @Mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_usuario ( $dato, $bd = null ){
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
	
		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('SELECT * FROM lista_valores where agrupacion=?');
			$bd->setParametro($dato);
	
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionGeneral::fn_consulta_usuario');
		}
	
		$bd->Cerrar();
		return $array;
	
	}

}
?>