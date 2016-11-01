<?php

require_once('/../Config/ConexionBD.php');

class ConsultasTrabajadores {

	/** @Autor	Raphael Lara
	 *  @Mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_empleados( $bd = null ){
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
			$bd->printErrores('ConsultasTrabajadores::fn_consulta_empleados');
		}

		$bd->Cerrar();
		return $array;
	}

	/** @Autor	Raphael Lara
	 *  @Mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_empleado ( $codigo, $bd = null ){
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
			$bd->printErrores('ConsultasTrabajadores::fn_consulta_empleado');
		}

		$bd->Cerrar();
		return $array;

	}
}

?>