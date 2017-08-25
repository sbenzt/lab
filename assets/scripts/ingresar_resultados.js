var base_url = $('base').attr('href');
//boton abrir modal
$('.open-modal').click(function(){
	id_ingresado 	= $(this).attr('data-id-ingresado');
	codigo_analisis = $(this).attr('data-cod');
	analisis 		= $(this).text();
	set_modal(analisis,id_ingresado,codigo_analisis);
});


function set_modal(analisis,id_ingresado,codigo_analisis){
	$('.modal-title').text(analisis);

	data = { id_ingresado : id_ingresado, codigo_analisis : codigo_analisis }; 
	$.get(base_url + 'resultados/resultados_ajax',data,function(data){
		data = JSON.parse(data);
        $('#tabla-campos').html('');
        for(i=0;i<data.length;i++){
        	valor_obtenido = (data[i].valor_obtenido == null) ? '' :  data[i].valor_obtenido;
        	html  = '<tr>';
        	html += '<td>'+ data[i].nombre_campo +'</td>';
        	html += '<td><input type="text" maxlength="30" class="form-control" value="'+ valor_obtenido +'" data-id-campo="'+ data[i].id_campo +'"></td>';
        	html += '<td>'+ data[i].unidad_medida +'</td>';
        	html += '<td class="text-center">'+ data[i].valor_referencia + ' ' + data[i].unidad_medida +'</td>';
        	html += '</tr>';
        	$('#tabla-campos').append(html);
        	$('#guardar-cambios').attr('data-id-ingresado',id_ingresado);
        	$('#guardar-cambios').attr('data-operacion',data[0].operacion);
        }
	});
}

$('#guardar-cambios').click(function(){
	id_ingresado = $(this).attr('data-id-ingresado');
	operacion    = $(this).attr('data-operacion');
	resultados   = new Array();
	$('#tabla-campos tr').each(function(index){
		id_campo       = $('td:eq( 1 )',this).find('input').attr('data-id-campo');
		valor_obtenido = $('td:eq( 1 )',this).find('input').val();

		resultado = {
			id_ingresado   : id_ingresado,
			id_campo   	   : id_campo,
			valor_obtenido : valor_obtenido
		}

		resultados[index] = resultado;
	});

	$.ajax({
		url  : base_url + '/resultados/' + operacion,
		type : 'post',
		data : { resultados : resultados },
		success : function(data){
			if(data > 0)
				sweetAlert("Exito", "Resultados ingresados", "success");
			else
				sweetAlert("Aviso", "Debe modificar al menos un campo", "warning");
		},
		error : function(){
			sweetAlert("Error", "Ocurrio un error en el servidor", "danger");
		}
	});
	//
});