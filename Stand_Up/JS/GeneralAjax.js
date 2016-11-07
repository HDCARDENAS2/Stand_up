

function Ajax(forma,url){
	
	var resultado = null;
	
	$.ajax({
		url : url+"",
		type : "post",
		data : $('#'+forma).serialize(),
		dataType : "json",
		async : false,
		success : function(response) {
			try {
				if(!ErrorManagger(response.errors)){
					resultado = response;
				}
			} catch (e) {
				var errorMsg = "[AjaxException resultado ] Se han presentado los siguientes problemas:\n";
				errorMsg += "Error Javascript --> " + e.toString();
				Console.log(response+"\n"+e.toString());
				alert(errorMsg);
			}
		},
		error : function(response){
			ErrorManagger(response.errors);
		}
	});
	
	return resultado;
}

function ErrorManagger(errores) {
	
	var flag = 1;
	
	if (errores != null) {
		var err = '';
		err = 'Ocurrieron los siguientes problemas: ' + "\n" + "\n";
		var cantErrors = errores.length;
		for (i = 0; i < cantErrors; i++) {
			err = err + '- ' + errores[i] + "\n";
		}
		alert(err);
		flag = 0;
	}

	if(flag == 1){
		return false;
	}else{
		return true;
	}
	 
}