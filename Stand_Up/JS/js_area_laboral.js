
/**
 * @author	Raphael Lara
 * @email	lara_d_kli@hotmail.com
 * @date	07/11/2016
 */
function fn_registrar_area_laboral(){
	
	var descripcion   = $("#descripcion").val();
	
	var mensaje = "";
	
	if(descripcion == ""){
		mensaje ="Digite una descripcion.\n";
	}
	
	
	if(mensaje == ""){
        //peticion ajax
		var respuesta = Ajax('forma_registro_area_laboral',
				             '../Control/control_addAreaLaboral.php');
		
		if(respuesta != null){
			alert('El registro se inserto correctamente');
			//submit forma
			forma_registro_area_laboral.submit();
		}	
	}else{
		alert(mensaje);
	}
	
}

/**
 * @author	Raphael Lara
 * @email	lara_d_kli@hotmail.com
 * @date	07/11/2016
 */
function fn_update_area_laboral( elemento, id ){
	
	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	
    //peticion ajax
	var respuesta = Ajax('forma_tabla_area_laboral',
			             '../Control/control_updAreaLaboral.php');
	
	if(respuesta != null){
		alert('El registro fue modificado correctamente');
	}	

}

/**
 * @author	Raphael Lara
 * @email	lara_d_kli@hotmail.com
 * @date	13/11/2016
 */
function fn_delete_area_laboral( elemento, id, id_row ){
	
	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	
	/** Peticion ajax */
	var respuesta = Ajax('forma_tabla_area_laboral',
						 '../Control/control_delAreaLaboral.php');
	
	if(respuesta != null){
		alert('La area laboral fue eliminada correctamente');
		$("#row_"+id_row).remove();
	}	
}

/**
 * @author	Raphael Lara
 * @email	lara_d_kli@hotmail.com
 * @date	13/11/2016
 */
function limit_input(element){
	var max_chars = 45;
	
	if(element.value.length > max_chars) {
		element.value = element.value.substr(0, max_chars);
	}
}

/**
 * @author	Raphael Lara
 * @email	lara_d_kli@hotmail.com
 * @date	13/11/2016
 */
function validate_input(element){
	var lenght_word = element.value.length;

	if (!/^[a-zA-Z]*$/g.test(element.value)) {
		element.value = element.value.substr(0, lenght_word - 1);
	}
}