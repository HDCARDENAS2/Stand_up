
/**
 * @author	Raphael Lara
 * @email	lara_d_kli@hotmail.com
 * @date	07/11/2016
 */
function fn_registrar_trabajador(){
	
	var nombres = $("#nombres").val();
	var apellidos   = $("#apellidos").val();
	var correo   = $("#correo").val();
	var area_laboral = $("#cmb_area_laboral_new").val();
	
	var mensaje = "";
	
	if(nombres == ""){
		mensaje +="Escriba el nombre del trabajador.\n";
	}
	
	if(apellidos == ""){
		mensaje +="Escriba el apellido del trabajador.\n";
	}
	
    if(correo == ""){
        mensaje +="Escriba un correo del trabajador.\n";
	}
	
    if(area_laboral == ""){
        mensaje +="Seleccione un area laboral.\n";
	}
	
	if(mensaje == ""){
        /** Peticion ajax */
		var respuesta = Ajax('forma_registro_trabajador',
				             '../Control/control_addTrabajador.php');
		
		if(respuesta != null){
			alert('El registro se inserto correctamente');
			/** submit forma */
			forma_registro_trabajador.submit();
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
function fn_update_trabajador( elemento, id ){
	
	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	
    /** Peticion ajax */
	var respuesta = Ajax('forma_tabla_trabajadores',
			             '../Control/control_updTrabajador.php');
	
	if(respuesta != null){
		alert('El registro se modifico correctamente');
	}

}

/**
 * @author	Raphael Lara
 * @email	lara_d_kli@hotmail.com
 * @date	13/11/2016
 */
function fn_delete_trabajador( elemento, id, id_row ){
	
	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	
	/** Peticion ajax */
	var respuesta = Ajax('forma_tabla_trabajadores',
						 '../Control/control_delTrabajador.php');
	
	if(respuesta != null){
		alert('El trabajador fue eliminado correctamente');
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

/**
 * @author	Raphael Lara
 * @email	lara_d_kli@hotmail.com
 * @date	13/11/2016
 */
function validate_mail(element) {
    var x = element.value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert('No es un correo valido!');
        return false;
    }
}