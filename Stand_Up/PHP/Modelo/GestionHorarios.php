<?php

require_once('/../Config/ConexionBD.php');

/**
 * @autor	Cesar Rodriguez
 * @mail	crodriguez@gmail.com
 * @date	29/10/2016
 */

class GestionHorarios {
	
	/**
	 * @autor	Cesar Rodriguez
	 * @mail	crodriguez@gmail.com
	 * @date	29/10/2016
	 * @desc	Esta funcion consulta todos los horarios
	 */
	function fn_consulta_horarios( $bd = null ){
		
		$array = null;
        
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		   //Sentecia
		   $bd->setSentencia('select * from horarios where cod_estado = 1' );
		   //Se ejecuta la sentencia
		   if($bd->Ejecutar()){
		     	$array = $bd->getResutados();
		   }
	   
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('GestionHorarios::fn_consulta_horarios');
		}
		//Cierre de conexion
		$bd->Cerrar();
		
		return $array;
	}
	
	/**
	 * @autor	Cesar Rodriguez
	 * @mail	crodriguez@gmail.com
	 * @date	29/10/2016
	 * @desc	Esta funcion consulta un horario por id
	 */
	function fn_consulta_horario( $codigo, $bd = null ){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from horarios where id_horarios=? where cod_estado = 1');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('GestionHorarios::fn_consulta_horario');
		}
	    //Cierre de conexion
		$bd->Cerrar();
	
		return $array;
	
	}
}
?>
