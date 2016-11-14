
/**
 * @author	Raphael Lara
 * @email	lara_d_kli@hotmail.com
 * @date	07/11/2016
 */

function fn_validar_login(){
	
	var usuario = $("#user_name").val();
	var password   = $("#user_pass").val();
	
	var mensaje = "";
	
	if(usuario == ""){
		mensaje +="Ingrese un usuario.\n";
	}
	
	if(password == ""){
		mensaje +="Ingrese una contraseña.\n";
	}
	
	if(mensaje == ""){
        /** Peticion ajax */
		var respuesta = Ajax('forma_login_usuario',
				             '../Control/control_login.php');
		if(respuesta != null){
			if(respuesta.resultado == 1 ){
				document.location.href='../Vista/Vista_horario_tareas_index.php';
			}
		}	
	
	}else{
		alert(mensaje);
	}
}