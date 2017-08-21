$(document).ready(function(){
	//FUNCION FILTRO
    $('#filtro1').on('change',function(){
        valor = $(this).val();
        switch (valor){ //me permite cargar el listado dependiendo del otro select
            case 'ordenes':
                html  = '<option value="nombre">Nombre</option>'; 
                html += '<option value="apellidopaciente">Apellido</option>';
                html += '<option value="idorden">Id Orden</option>';
                html += '<option value="nombreobrasocial"> Obra Social</option>';
                html += '<option value="fecha">Fecha (aaaa-mm-dd)</option>';
                

                $('#filtro2').html(html);
                //alert(valor);
                break;
            case  'obrassociales':
                html  = '<option value="id_obra_social">ID Obra Social</option>';
                html += '<option value="obra_social">Nombre</option>';
                $('#filtro2').html(html);
                break;
            case 'medicos':
                html  = '<option value="id_medico">ID Medico</option>';
                html += '<option value="medico">Apellido</option>';
                $('#filtro2').html(html);
                break;
            case 'analisis':
                html  = '<option value="codigo_analisis">Codigo del Analisis</option>';
                html += '<option value="analisis">Nombre del analisis</option>';
                $('#filtro2').html(html);
                break;
            case 'resultados':
                html  = '<option value="nombre">Nombre Paciente</option>';
                html += '<option value="fecha">Fecha (aaaa-mm-dd)</option>';
                html += '<option value="medico">Medico</option>';
                html += '<option value="analisis">Analisis</option>';
                $('#filtro2').html(html);
                break;
            case 'usuarios':
                html  = '<option value="nombre">Nombre Usuario</option>';
                html += '<option value="tipousuario">Tipo Usuario</option>';
                $('#filtro2').html(html);
                break;

        }
    });
    //FIN FUNCION FILTRO
});

