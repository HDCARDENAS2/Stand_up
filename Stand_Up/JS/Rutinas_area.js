
/**
 * Esta funcion registra rutina area
 *
 * @author Hernan Dario Cardenas
 *         @email dropimax@gmail.com
 *         @date 05/11/2016
 * @access public
 */

function fn_registrar_rutina_area(){
	
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
		var respuesta = Ajax('forma_registro_rutinas_area',
				             '../Control/Add_Rutina_areas.php');
		
		if(respuesta != null){
			alert('La Rutina area se inserto correctamente');
			//submit forma
			forma_registro_rutinas_area.submit();
		}	
	}else{
		alert(mensaje);
	}
	
}

/**
 * Esta funcion modifica rutina area
 *
 * @author Hernan Dario Cardenas
 *         @email dropimax@gmail.com
 *         @date 05/11/2016
 * @access public
 */

function fn_udapte_rutina_area(elemento,id){
	
	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	
    //peticion ajax
	var respuesta = Ajax('forma_tabla_rutinas_area',
			             '../Control/Mod_Rutina_areas.php');
	
	if(respuesta != null){
		alert('La Rutina area fue modificada correctamente');
	}	

}