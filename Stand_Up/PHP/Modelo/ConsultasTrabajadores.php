<?php

require_once('/../Config/ConexionBD.php');

class ConsultasTrabajadores {

	/** @Autor	Raphael Lara
	 *  @Mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_trabajador( $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from trabajadores' );
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('ConsultasTrabajadores::fn_consulta_trabajador');
		}

		$bd->Cerrar();
		return $array;
	}

	/** @Autor	Raphael Lara
	 *  @Mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_trabajador_by_codigo( $codigo, $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from trabajadores where idtrabajadores=?');
			$bd->setParametro($codigo);
				
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('ConsultasTrabajadores::fn_consulta_trabajador_by_codigo');
		}

		$bd->Cerrar();
		return $array;

	}
}

?>