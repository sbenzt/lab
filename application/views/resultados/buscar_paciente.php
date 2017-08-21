<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<!-- BEGIN CONTENT BODY -->
<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Ingresar Resultados
                <small>busqueda de pacientes</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->
    </div>
</div>
<!-- END PAGE HEAD-->
<!-- BEGIN PAGE CONTENT BODY -->
<div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN Portlet PORTLET-->
                    <?php if(isset($ayuda)):?>
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>Texto de Ayuda</div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse" data-original-title="" title=""><i class="fa fa-tasks fa-2" aria-hidden="true" style="color:white"></i></a>
                                </div>
                            </div>
                            <div class="portlet-body portlet-empty" style="display: block;"><div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="scroller" style="height: 300px; overflow: hidden; width: auto;" data-rail-visible="1" data-initialized="1">
                                <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                                    mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
                                <p> Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis,
                                    est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                <p> sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi
                                    erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                <p> Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis,
                                    est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                <p> Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis,
                                    est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                            </div><div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 142.405px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px; display: none;"></div></div>
                            <script>
                                jQuery(document).ready(function()
                                {
                                    App.initAjax();
                                });
                            </script></div>
                        </div>
                    <?php endif; ?>
                    <!-- END Portlet PORTLET-->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-speech font-green"></i>
                                <span class="caption-subject bold font-green uppercase">Buscar Paciente</span>
                            </div>
                        </div>
                        <div class="portlet-body form">


                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Protocolo o nombre del paciente"> 
                                </div>

                                 <div class="col-md-4">
                                    <input type="date" class="form-control" placeholder="ds"> 
                                </div>

                                <div class="col-md-2">
                                    <input type="submit" class="form-control" placeholder=".col-md-6"> 
                                </div>
                              <br>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">

                            <div class="caption font-dark">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject bold uppercase">Listado de pacientes</span>
                            </div>
                        </div>

                        <div class="portlet-body">
                            <div id="sample_1_wrapper" class="dataTables_wrapper">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- { Tabla ordenes } -->
<table class="table table-striped table-bordered table-hover dataTable dtr-inline" id="sample_1" role="grid" aria-describedby="sample_1_info" style="width: 1094px;">
    <thead>
        <th rowspan="1" colspan="1">Protocolo</th>
            <th rowspan="1" colspan="1">Apellido y Nombre</th>
            <th rowspan="1" colspan="1">Nº de orden</th>
            <th rowspan="1" colspan="1">Nº de afiliado</th>
            <th rowspan="1" colspan="1">Fecha</th>
            <th rowspan="1" colspan="1">Obra Social</th>
            <th rowspan="1" colspan="1">Modificar</th>
            <th rowspan="1" colspan="1">Eliminar</th>
    </thead>

    <tbody>
    <?php for($i=1;$i<=15;$i++): ?>
    <tr role="row" class="odd">
            <td tabindex="0" class="sorting_1">564</td>
            <td><a href="<?=base_url('resultados/protocolo/')?><?=$i?>">Juan Roman</a></td>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>

        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>
<!-- END PAGE CONTENT BODY -->
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
