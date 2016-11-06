$(document).ready(function() {
  // Handler for .ready() called.
  $("#guardar_horarios").click(validarFormularioHorarios);

  function validarFormularioHorarios(){
	if($("#dia_inicio").val() == ""){
		$('#validar_dia_inicio').html("Ingrese el dia de inicio");
	}else{
		$('#validar_dia_inicio').html("");

	}

	if($("#dia_fin").val() == ""){
		$('#validar_dia_fin').html("Ingrese el dia de fin");
	}else{
		$('#validar_dia_fin').html("");

	}

	if($("#hora").val() == ""){
		$('#validar_hora').html("Ingrese la hora");
	}else{
		$('#validar_hora').html("");

	}
}

});

