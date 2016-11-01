<?php

require_once('/../Config/ConexionBD.php');

class ConsultasRutinas {

	/** @Autor	Alex Alvarado
	 *  @Mail	alexalvaradomarquez@gmail.com
	 */
	function fn_consulta_rutinas( $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from rutinas');
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('ConsultasRutinas::fn_consulta_rutina');
		}

		$bd->Cerrar();
		return $array;
	}
        
        function fn_consulta_rutina($codigo,$bd = null){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from rutinas where idrutina=?');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		//Errores 
		if($bd->Errores()){
			$bd->printErrores('ConsultasRutinas::fn_consulta_rutina');
		}
	    //Cierre de conexion
		$bd->Cerrar();
	
		return $array;
	
	}

}

