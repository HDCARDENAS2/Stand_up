<?php

require_once('/../Config/ConexionBD.php');

class GestionTrabajadores {

	/** @autor	Raphael Lara
	 *  @mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_trabajadores( $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from trabajadores where cod_estado = 1' );
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionTrabajadore::fn_consulta_trabajadores');
		}

		$bd->Cerrar();
		return $array;
	}

	/** @autor	Raphael Lara
	 *  @mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_trabajador ( $codigo, $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from trabajadores where id_trabajadores=? and cod_estado = 1');
			$bd->setParametro($codigo);
				
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionTrabajadore::fn_consulta_trabajador');
		}

		$bd->Cerrar();
		return $array;

	}
}

?>