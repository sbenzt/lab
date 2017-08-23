var base_url = $('base').attr('href');


//autocomplete medico
$('.medico_autcomplete').autocomplete({
	        minChars: 2,
	        serviceUrl: base_url +  '/medicos/medico',
	        onSelect: function (suggestion) {
	        	$(this).attr('data-id-medico',suggestion.id_medico);  
	        }
});

//autocomplete obra social
$('.obra_autcomplete').autocomplete({
	        minChars: 2,
	        serviceUrl: base_url +  '/obras_sociales/obra_social',
	        onSelect: function (suggestion) {
	            $(this).attr('data-id-obra',suggestion.id_obra);  
	        }
});

//autcomplete analisis
$('body').on('click','.analisis_autocomplete',function(){

	$(this).autocomplete({
	        minChars: 2,
	        serviceUrl: base_url +  '/analisis/analisis_',
	        onSelect: function (suggestion) {
	         	$(this).attr('data-cod',suggestion.codigo_analisis);   
	         	$(this).attr('data-nbu',suggestion.nbu);
	         	each_total();  
	        }
	});

});

/************************************************************
* VERIFICACIONES
************************************************************/
var protocolo_ = true;
var nombre_ = true;
var apellido_ = true;
var medico_ = true;
var obras_ = true;
var total_ = true;
var pagado_ = true;
var analisis_ = true;

//protocolo
$('#protocolo').on('click',function(){
	verficar_protocolo($(this).val());
});

$('#protocolo').on('change',function(){
	verficar_protocolo($(this).val());
});

function verficar_protocolo(protocolo){

	input = $('#protocolo');
	form  = $('#form_protocolo');

	if(protocolo == '' || isNaN(protocolo)){
		form.addClass('has-error');
		$('#form_protocolo .help-block').text('El campo no puede ser vacío');
		protocolo_ = false;
	}
	else{
		$.get(base_url + 'ordenes/protocolo',{protocolo : protocolo},function(data){
			if(data == protocolo){
				input.attr('data-erform',1);
				$('#form_protocolo').addClass('has-error');
				$('#form_protocolo .help-block').text('El protocolo ' +  protocolo + ' ya existe.');
				protocolo_ = false;
			}
			else{
				input.attr('data-erform',0);
				$('#form_protocolo').removeClass('has-error');
				$('#form_protocolo .help-block').text('');
				protocolo_ = true;
			}
		});
	}

}

//nombre del paciente
function verficar_nombre(){
	input = $('#nombre_paciente').val();
	form  = $('#form_nombre_paciente');

	if(input == '' || input.length == 0){
		form.addClass('has-error');
		$('#form_nombre_paciente .help-block').text('El campo no puede ser vacío');
		nombre_ = false;
		return false;
	}
	else{
		form.removeClass('has-error');
		$('#form_nombre_paciente .help-block').text('');
		nombre_ = true;
		return input;
	}
}

//apellido del paciente
function verficar_apellido(){
	input = $('#apellido_paciente').val();
	form  = $('#form_apellido_paciente');

	if(input == '' || input.length == 0){
		form.addClass('has-error');
		$('#form_apellido_paciente .help-block').text('El campo no puede ser vacío');
		apellido_ = false;
		return false;
	}
	else{
		form.removeClass('has-error');
		$('#form_apellido_paciente .help-block').text('');
		apellido_ = true;
		return input;
	}
}

//medico
function verficar_medico(){
	input = $('#medico').val();
	form  = $('#form_medico');

	if(input == '' || input.length == 0){
		form.addClass('has-error');
		$('#form_medico .help-block').text('El campo no puede ser vacío');
		medico_ = false;
		return false;
	}
	else{
		form.removeClass('has-error');
		$('#form_medico .help-block').text('');
		medico_ = true;
		return input;
	}

}

//obra social
function verficar_obra_social(){
	input = $('#obra_social').val();
	form  = $('#form_obra_social');

	if($('#obra_social').attr('data-id-obra') == 0){
		form.addClass('has-error');
		$('#form_obra_social .help-block').text('El campo no puede ser vacío');
		obras_ = false;
		return false;
	}
	else{
		form.removeClass('has-error');
		$('#form_obra_social .help-block').text('');
		obras_ = true;
		return $('#obra_social').attr('data-id-obra');
	}

		
}

//obra total
function verificar_total(){
	input = $('#total').val();
	form  = $('#form_total');

	if(input < 0 || isNaN(input)){
		form.addClass('has-error');
		$('#form_total .help-block').text('Valor invàlido');
		total_ = false;
		return false;
	}
	else{
		form.removeClass('has-error');
		$('#form_total .help-block').text('');
		total_ = true;
		return input;
	}
}

//obra pagado
function verificar_pagado(){
	input = $('#pagado').val();
	form  = $('#form_pagado');

	if(input < 0 || isNaN(input)){
		form.addClass('has-error');
		$('#form_pagado .help-block').text('Valor inválido');
		pagado_ = false;
		return false;
	}
	else{
		form.removeClass('has-error');
		$('#form_pagado .help-block').text('');
		pagado_ = true;
		return input;
	}
}

//lista de analisis
function verificar_analisis(){
	$('.mt-repeater .row').each(function (index) {
		input = $('div:eq( 0 )',this).find('input');
		cod   = input.attr('data-cod');
        if( cod == 0 ){
        	$('.add-a').css('color','#e73d4a');
        	input.css('border-color','#e73d4a');
        	input.val('');
        	analisis_ = false;
        }
        else{
        	$('.add-a').css('color','#333');
        	input.css('border-color','#c2cad8');
        	analisis_ = true;
        }
	});
}

/************************************************************
* CALCULA EL TOTAL DE ANALISIS
************************************************************/



function each_total(){

	if($('#calcular').prop('checked')){
		total = 0;
		setTimeout(function(){  
			$('.mt-repeater .row').each(function (index) {
		                input=$('div:eq( 0 )',this).find('input');
		                nbu = input.attr('data-nbu');
		                if(!isNaN(nbu))
		                	total = parseFloat(nbu) + total;            
		    });
		    $('#total').val(total);
	    }, 1000);
	}
}

/************************************************************
* CARGA FORM
************************************************************/
//Obtener arreglo de analisis
$('#cargar_form').click(function(e){
	e.preventDefault();

    //////////////////Recorre la listade analisis ////////////////
	data_analisis = new Array();
    array_ = true;
	$('.mt-repeater .row').each(function (index) {
                input    = $('div:eq( 0 )',this).find('input');
                checkbox = $('div:eq( 1 )',this).find('input');
                codigo_analisis = input.attr('data-cod');
                checked         = checkbox.prop('checked');
                if(codigo_analisis != 0)
	                data_analisis[index] = [codigo_analisis,checked];
    });

    if(data_analisis.length == 0)
    	array_ = false
    //////////////////////////////////////////////////////////////

    ////////////// Carga los datos de la orden //////////////////
    data_orden = {
    	protocolo         : $('#protocolo').val(),
		nombre_paciente   : verficar_nombre(),
		apellido_paciente : verficar_apellido(),
		numero_orden      : $('#norden').val(), 
		numero_afiliado   : $('#nafiliado').val(),
		fecha 			  : '',
		id_obra_social	  : verficar_obra_social(),
		medico   		  : verficar_medico(),
		id_medico         : '',
		id_usuario        : ''
	}
				   verificar_analisis();
	//////////////////////////////////////////////////////////////

	////////////// Carga los datos de la caja //////////////////
    data_caja = {
		monto        : verificar_total(),
		pagado       : verificar_pagado(),
		concepto     : 'Orden ingresada - Protocolo : ' + $('#protocolo').val(),
		id_tipo_caja : 1,
		id_usuario   : ''
	}
				   verificar_analisis();
	//////////////////////////////////////////////////////////////

	///////////////////// Verifica valida todos los campos ///////
	if(protocolo_ && nombre_ && apellido_ && medico_ 
		&& obras_ && analisis_ && total_ && pagado_ && array_){

		//console.log(data_orden);
		//console.log(data_analisis);

		$.ajax({
			url : base_url + 'ordenes/nuevo',
			type : 'post',
			data : { data_orden : data_orden , data_analisis : data_analisis, data_caja : data_caja },
			success : function(data){
				if(data == 1){
					sweetAlert("Exito", "Orden ingresada", "success");
					setTimeout(function(){  
						location.reload();
		    		}, 5000);
				}else{
					sweetAlert("Error", "No se pudo cargar la orden", "error");
					setTimeout(function(){  
						location.reload();
		    		}, 5000);
				}
			},
			error: function(){
				sweetAlert("Error", "Ocurrio un error en le servidor", "error");
				setTimeout(function(){  
					location.reload();
	    		}, 5000);

			}
		});

	}
	else{
        sweetAlert("Formulario no enviado", "Verificar los campos", "error");	
	}
    //////////////////////////////////////////////////////////////          


});





