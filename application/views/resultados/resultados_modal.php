<!-- /.modal -->
<div class="modal fade bs-modal-lg" id="large" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Nombre del anialis</h4>
            </div>
            <div class="modal-body">
                <div class="table-scrollable table-scrollable-borderless">
                    <table class="table table-hover table-light">
                        <thead>
                            <tr class="uppercase">
                                <th>Campo</th>
                                <th>Completar</th>
                                <th>&nbsp;</th>
                                <th class="text-center">Valor de referencia / Unidad de medida</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0;$i<5;$i++): ?>
                            <tr>
                                <td> 1 </td>
                                <td><input type="text" maxlength="30" class="form-control"></td>
                                <td>mg/l</td>
                                <td class="text-center">25 a 50 Mgr/lt</td>
                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn green" id="">Guardar cambios</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->