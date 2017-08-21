var base_url = $('base').attr('href');


//autocomplete medico
$('.medico_autcomplete').autocomplete({
	        minChars: 2,
	        serviceUrl: base_url +  '/medicos/medico',
	        onSelect: function (suggestion) {
	        }
});

//autocomplete obra social
$('.obra_autcomplete').autocomplete({
	        minChars: 2,
	        serviceUrl: base_url +  '/obras_sociales/obra_social',
	        onSelect: function (suggestion) {
	            
	        }
});

//autcomplete analisis
$('body').on('click','.analisis_autocomplete',function(){

	$(this).autocomplete({
	        minChars: 2,
	        serviceUrl: base_url +  '/analisis/analisis_',
	        onSelect: function (suggestion) {
	         	$(this).attr('data-cod',suggestion.codigo_analisis);   
	        }
	});

});


//verificar protocolo
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
		input.attr('data-erform',1);
		form.addClass('has-error');
		$('#form_protocolo .help-block').text('El campo no puede ser vacío');
	}
	else{
		$.get(base_url + 'ordenes/protocolo',{protocolo : protocolo},function(data){
			if(data == protocolo){
				input.attr('data-erform',1);
				$('#form_protocolo').addClass('has-error');
				$('#form_protocolo .help-block').text('El protocolo ' +  protocolo + ' ya existe.');
			}
			else{
				input.attr('data-erform',0);
				$('#form_protocolo').removeClass('has-error');
				$('#form_protocolo .help-block').text('');
			}
		});
	}

}

//Obtener arreglo de analisis
$('#cargar_form').click(function(e){
	e.preventDefault();


	var analisis = new Array();
    var arreglo = new Array();

	$('.mt-repeater .row').each(function (index) {
                input=$('div:eq( 0 )',this).find('input');
                codigo_analisis = input.attr('data-cod');
                console.log(codigo_analisis);
                //analisis[index] = [ana,check];
    });


});

