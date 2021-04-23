$(document).ready(function(){

	$('input[name=ocupacion]').change(function(){
 
	var ocupacion = $(this).val();
	 
	if (ocupacion == 'Otro') {		
		$('.ocupacion').append('<label for="otraOcupacion" class="otraOcupacion">¿Cual?:</label><br>');
		$('.ocupacion').append('<input type="text" class="form-control otraOcupacion" id="otraOcupacion" name="otraOcupacion">');
	}else{
		$('.otraOcupacion').remove();
	}	
	 
	});

	$('input[class=discapacidadFisica]').change(function(){
    	
    	if ($(this).val() == 'Otra') {;
    		$('.discapacidad').append('<label for="discapacidadFisicaOtra" class="discapacidadFisicaOtra">¿Cual?:</label>');
			$('.discapacidad').append('<input type="text" class="form-control discapacidadFisicaOtra" id="discapacidadFisicaOtra" name="discapacidadFisicaOtra">');
    	}
    	if ($('#discapacidadFisicaOtra').is(':checked') ) {
             } else {
                $('.discapacidadFisicaOtra').remove();
            }
    });

    $('input[name=organizacionSocial]').change(function(){
 
	var organizacion = $(this).val();
	 
	if (organizacion == 'Si') {		
		$('.organizacion').append('<label for="organizacionSocialOtra" class="organizacionSocialOtra">¿Cual?:</label>');
		$('.organizacion').append('<input type="text" class="form-control organizacionSocialOtra" id="organizacionSocialOtra" name="organizacionSocialOtra">');
	}else{
		$('.organizacionSocialOtra').remove();
	}	
	 
	});

	$('input[name=conflictoArmado]').change(function(){
 
	var armado = $(this).val();
	 
	if (armado == 'Si') {		
		$('.victima').append('<label for="victimaConflictoOtra" class="victimaConflictoOtra">¿Cual?:</label>');
		$('.victima').append('<input type="text" class="form-control victimaConflictoOtra" id="victimaConflictoOtra" name="victimaConflictoOtra">');
	}else{
		$('.victimaConflictoOtra').remove();
	}	
	 
	});


	$('input[name=programasInformaticos]').change(function(){
 
	var programas = $(this).val();
	 
	if (programas == 'Si') {		
		$('.programas').append('<label for="cualPrograma" class="cualPrograma">¿Cual?:</label>');
		$('.programas').append('<input type="text" class="form-control cualPrograma" id="cualPrograma" name="cualPrograma">');
	}else{
		$('.cualPrograma').remove();
	}	
	 
	});

	$.ajax({
                  type: "GET",
                  url: "https://virtuales.orgsolidarias.gov.co/virtual/public/departamentos",
                  success: function(response)
                  {
                  
                  $("#departamento").html(response);
                  $("#departamento").selectpicker('refresh');                                   
                  
              	}
              });

});