<?php

require_once('../Config/ConexionBD.php');

/**
 * @autor	Luis Leon - Melissa Minotta
 * @date	11/11/2016
 */

class GestionVistaIndex {

	/**
 * @autor	Luis Leon - Melissa Minotta
 * @date	11/11/2016
 */
	function fn_consulta_vistas( $id,$bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select rutinas.url_imagen ,rutinas.duracion
								from horario_tarea  
								inner join rutinas 
								on horario_tarea.id_rutinas = rutinas.id_rutinas
								where horario_tarea.id_horarios= ? and 
								horario_tarea.cod_estado = 1 and rutinas.cod_estado=1;');
			//parametros
			$bd->setParametro($id);
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionVistaIndex::fn_consulta_vistas');
		}

		$bd->Cerrar();
		
		
		return $array;
	}
        
	
}

