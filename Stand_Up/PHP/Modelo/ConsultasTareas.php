<?php

require_once('/../Config/ConexionBD.php');

/*
 * @Autor Luis Leon
 * @Mail  leon9326@gmail.com
 * @Name Consultastareas
 * @Date 31/10/2016
 *
 * Esta clase contine las consultas de Tareas
 */

class ConsultasTareas {
	
	
/*
 * @Autor Luis Leon
 * @Mail  leon9326@gmail.com
 * @Name Consultastareas
 * @Date 31/10/2016
 *
 * Esta clase contine las consultas de todas las Tareas
 */
	function fn_consulta_tareas($bd = null){
		
		$array = null;
        
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		   //Sentecia
		   $bd->setSentencia('select * from tarea' );
		   //Se ejecuta la sentencia
		   if($bd->Ejecutar()){
		     	$array = $bd->getResutados();
		   }
	   
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('ConsultasTareas::fn_consulta_tareas');
		}
		//Cierre de conexion
		$bd->Cerrar();
		
		return $array;
		
	}
	

/*
 * @Autor Luis Leon
 * @Mail  leon9326@gmail.com
 * @Name Consultastareas
 * @Date 31/10/2016
 *
 * Estafuncion consulta una tarea
 */
	function fn_consulta_tarea($codigo,$bd = null){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from tarea where idtarea=?');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		//Errores 
		if($bd->Errores()){
			$bd->printErrores('ConsultasTareas::fn_consulta_tareas');
		}
	    //Cierre de conexion
		$bd->Cerrar();
	
		return $array;
	
	}
	
	
	
}
?>
