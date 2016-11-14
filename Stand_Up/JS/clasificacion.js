
/**
 * 
 *
 * @author Melissa Minotta
 *         @date 07/11/2016
 * @access public
 */

function fn_registrar_clasificacion(){
	
	var descripcion   = $("#descripcion").val();
	
	var mensaje = "";
	
	if(descripcion == ""){
		mensaje ="Digite una descripcion.\n";
	}
		
	if(mensaje == ""){
        //peticion ajax
        console.log("Entro a guardar");
		var respuesta = Ajax('forma_registro_clasificacion',
				             '../Control/Add_clasificacion.php');
		
		if(respuesta != null){
			alert('La Clasificaion se inserto correctamente');
			//submit forma
			forma_registro_clasificacion.submit();
		}	
	}else{
		alert(mensaje);
	}
	
}

/**
 * 
 *
 * @author Melissa Minotta
 *         @date 07/11/2016
 * @access public
 */

function fn_udapte_clasificacion(elemento,id){
	
	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	
    //peticion ajax
	var respuesta = Ajax('forma_tabla_clasificacion_rutina',
			             '../Control/Mod_clasificacion.php');
	
	if(respuesta != null){
		alert('La Clasificacion fue modificada correctamente');
		location.reload();
	}	


}

function fn_delete_clasificacion(elemento,id,id_row){
	
	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	    //peticion ajax
	var respuesta = Ajax('forma_tabla_clasificacion_rutina',
			             '../Control/Del_clasificacion.php');
	
	if(respuesta != null){
		alert('La clasificacion fue eliminada correctamente');
					 $("#row_"+id_row).remove();
	}	

}