<?php

require_once('/../Config/ConexionBD.php');

class GestionArea_Laboral {
	
	/** @Autor	Raphael Lara
	 *  @Mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_areas_laboral( $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from area_laboral where cod_estado = 1' );
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionAreaLaboral::fn_consulta_areas_laboral');
		}

		$bd->Cerrar();
		return $array;
	}
	
	/** @Autor	Raphael Lara
	 *  @Mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_area_laboral ( $codigo, $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from area_laboral where id_area_laboral=? and cod_estado = 1');
			$bd->setParametro($codigo);
				
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionAreaLaboral::fn_consulta_area_laboral');
		}

		$bd->Cerrar();
		return $array;

	}
}

?>