<?php

class HTML_LIB{
	
	/**
	 * Esta funcion generar un combo html
	 *
	 * @author Hernan Dario Cardenas
	 *         @email dropimax@gmail.com
	 *         @date 05/11/2016
	 * @access public
	 */
	
   function DibujarCombo($array,$select = null,$flag_sin_blanco = false){
		$html = '';

		   if( count($array)!= null){
			if($flag_sin_blanco == false){
				$html = '<option value="">Selecione</option>' ;
			}
			
			$cont = 0;
			
			foreach ($array as $key => $value) {
			
				$cod_select = "";
				$des_select = "";
			
				foreach ($array[$key] as $key2 ) {
					if($cont == 0){
						$cod_select = $key2;
					}else if($cont == 1){
						$des_select = $key2;
					}else if($cont > 1){
						break;
					}
					$cont++;
				}
								
				$selected = "";

				if((string)$select != null){
					if(trim((string)$cod_select) == trim((string)$select) ){
						$selected ="selected";
					}
				}
			
				$html .= '<option '.$selected.' value="'.$cod_select.'">'.$des_select.'</option>' ;
				$cont = 0;
			}
			
		}
		return $html;
	}

	function DibujarComboCiudades($array,$select = null,$flag_sin_blanco = false){

		$html = "";
		
		if( count($array)!= null){
			if($flag_sin_blanco == false){
				$html = '<option value="">Selecione</option>' ;
			}

			foreach ($array as $key => $value) {
				$selected = "";
				if( $select != null){
					
					if(trim($value) == trim($select) ){
						$selected ="selected";
					}
				}
				$html .= '<option '.$selected.' value="'.$value.'">'.$value.'</option>' ;
			}
		}
		return $html;
	}
	
	
}