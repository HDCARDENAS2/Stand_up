
/**
 * @author	Raphael Lara
 * @email	lara_d_kli@hotmail.com
 * @date	07/11/2016
 */
function fn_registrar_area_laboral(){
	
	var cmb_rutina = $("#cmb_rutina_new").val();
	var cmb_area   = $("#cmb_area_new").val();
	
	var mensaje = "";
	
	if(cmb_rutina == ""){
		mensaje +="Seleccione una rutina.\n";
	}
	
    if(cmb_area == ""){
        mensaje +="Selecione un area.\n";
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