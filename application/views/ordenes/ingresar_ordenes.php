<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<!-- BEGIN CONTENT BODY -->
<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Ingresar Ordenes
                <small>formulario de ingreso</small>
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
                    <?php if($ayuda): ?>
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Texto de Ayuda</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse" data-original-title="" title=""><i class="fa fa-tasks fa-2" aria-hidden="true" style="color:white"></i></a>
                            </div>
                        </div>
                        <div class="portlet-body portlet-empty" style="display:block;"><div class="slimScrollDiv" style="position: relative; overflow: ; width: auto; height: 520px;"><div class="scroller" style="height: 500px; overflow:; width: auto;" data-rail-visible="1" data-initialized="1">
                            <!-- {texto} -->
                            <div class="col-md-12">
                                <h3>Formulario para ingresar órdenes</h3>
                                <p> 
                                    Permite el ingreso de una orden con sus correspondientes listado de análisis, se almacena la fecha automaticamente.
                                </p>
                                <dl>
                                    <dt><h4>Descripción de los campos</h4></dt>
                                    <dt>Protocolo</dt>
                                    <dd>campo numérico unico: su valor puede ser modificado y en caso de existir un mismo número en el sistema, se enviara un mensaje de error. No puede ser vacío.</dd>
                                    <dt>Nombre del paciente</dt>
                                    <dd>campo de texto: no puede ser vacio sino se enviara un mensaje de error.</dd>
                                    <dt>Apellido del paciente</dt>
                                    <dd>campo de texto: no puede ser vacio sino se enviara un mensaje de error.</dd>
                                    <dt>Medico</dt>
                                    <dd>campo de texto autocompletado: permite seleccionar el nombre del medico si ya fué ingresado en el sistema, si el nombre no existe en el sistema éste se guardará y prodá ser consultado en el proximo ingreso de una orden. Campo obligatorio, no puede ser vacio sino se enviara un mensaje de error.</dd>
                                    <dt>Obra Social</dt>
                                    <dd>campo de texto autocompletado: permite seleccionar el nombre de la obra social cargada en el sistema, en caso de ser particular deberá seleccionar la opción 'PARTICULAR'. Campo obligatorio, no puede ser vacio sino se enviara un mensaje de error.</dd>
                                    <dt>Número de orden</dt>
                                    <dd>campo de texto opcional</dd>
                                    <dt>Número de afiliado</dt>
                                    <dd>campo de texto opcional</dd>
                                    <dt>Análisis</dt>
                                    <dd>campo de texto autocompletado: permite buscar por código o nombre del analisis, deberá seleccionar e ingresar al menos un analisis. Campo obligatorio, no puede ser vacio sino se enviara un mensaje de error. </dd>
                                    
                                  </dl>
                            </div>
                            <!-- {/texto} -->
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
                                <span class="caption-subject bold font-green uppercase">Product Inventory</span>
                            </div>
                        </div>
                        <div class="portlet-body form">

                            <form role="form" action="" class="form-horizontal">
                                
                                <div class="form-group" id="form_protocolo">
                                        <label class="control-label col-md-3" for="inputError">Numero de protocolo</label>
                                        <div class="col-md-4">
                                            <input type="number" id="protocolo" value="<?=(isset($protocolo)) ? $protocolo : ''?>" min="<?=(isset($protocolo)) ? $protocolo - 5 : ''?>" class="form-control" data-erform="0" id="procotolo">
                                            <span class="help-block"></span>
                                        </div>
                                </div>

                                <div class="form-group" id="form_nombre_paciente">
                                        <label class="control-label col-md-3">Nombre del paciente</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="nombre_paciente">
                                            <span class="help-block"></span>
                                        </div>
                                </div>

                                <div class="form-group" id="form_apellido_paciente">
                                        <label class="control-label col-md-3">Apellido del paciente</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="apellido_paciente"">
                                            <span class="help-block"></span>
                                        </div>
                                </div>

                                <div class="form-group" id="form_medico">
                                        <label class="control-label col-md-3">Medico</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control medico_autcomplete" id="medico" data-id-medico="0">
                                            <span class="help-block"></span>
                                        </div>
                                </div>

                                <div class="form-group" id="form_obra_social">
                                        <label class="control-label col-md-3" for="inputError">Obra Social</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control obra_autcomplete" id="obra_social" data-id-obra="0">
                                            <span class="help-block"></span>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-3" for="inputError">Número de orden</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="norden">
                                            <span class="help-block"></span>
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label class="control-label col-md-3" for="inputError">Número de afiliado</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="nafiliado">
                                            <span class="help-block"></span>
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label class="control-label col-md-3" for="inputError">Calcular y guardar en caja</label>
                                        <div class="col-md-1">
                                            <input type="checkbox" class="form-control" id="calcular">
                                            <span class="help-block"></span>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label add-a">Análisis</label>
                                    <div class="col-md-9">
                                        <div class="mt-repeater">
                                            <div data-repeater-list="group-b">
                                                
                                                <div data-repeater-item="" class="row" style="">
                                                    <div class="col-md-7">
                                                        <label class="control-label">Nombre</label>
                                                        <input type="text" placeholder="Buscar por código o nombre" class="form-control analisis_autocomplete" data-cod="0"></div>
                                                    <div class="col-md-3">
                                                        <label for="autoriz" class="control-label text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Autorizar Análisis</label><br>
                                                        <input type="checkbox" placeholder="3" class="form-control check_form" id="utoriz">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label class="control-label" style="color:white">XXX</label>
                                                        <a href="javascript:;" data-repeater-delete="" class="btn btn-danger delete-an">
                                                            <i class="fa fa-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <a href="javascript:;" data-repeater-create="" class="btn btn-info mt-repeater-add">
                                                <i class="fa fa-plus"></i>Agregar nuevo analisis</a>
                                            <br>
                                            <br> </div>
                                    </div>
                                </div>

                                 <div class="form-group" id="form_total">
                                        <label class="control-label col-md-3" for="inputError">Precio total</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="total" value="0"> 
                                            <span class="help-block"></span>
                                        </div>
                                </div>

                                 <div class="form-group" id="form_pagado">
                                        <label class="control-label col-md-3" for="inputError">Pagado</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="pagado" value="0">
                                             <span class="help-block"></span>
                                        </div>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-circle green" data-toggle="modal" href="#large" id="cargar_form">Cargar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
