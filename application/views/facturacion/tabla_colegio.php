<!-- { Tabla ordenes } -->
<table class="table table-striped table-bordered table-hover dataTable dtr-inline" id="sample_1" role="grid" aria-describedby="sample_1_info" style="width: 1094px;">
    <thead>
            <th rowspan="1" colspan="1">Protocolo</th>
            <th rowspan="1" colspan="1">Analsis</th>
            <th rowspan="1" colspan="1">Campo</th>
            <th rowspan="1" colspan="1">Resultado</th>
            <th rowspan="1" colspan="1">Referencia / U. Medida</th>
            <th rowspan="1" colspan="1">Modificar</th>
            <th rowspan="1" colspan="1">Eliminar</th>
    </thead>

    <tbody>
    <?php for($i=1;$i<=15;$i++): ?>
    <tr role="row" class="odd">
            <td><a href="<?=base_url('resultados/protocolo/')?><?=$i?>">572</a></td>
            <td>546554</td>
            <td>33</td>
            <td>2008/11/28</td>
            <td>$162,700</td>
            <td><i class="fa fa-pencil-square-o fa-2" aria-hidden="true"></i></td>
            <td><i class="fa fa-trash fa-2" aria-hidden="true"></i></td>
        </tr>
    <?php endfor; ?>
    </tbody>
</table>
<!-- { /Tabla ordenes } -->

<!-- { Modal Editar Orden} -->
