						</div>
                    <!-- END CONTAINER -->
                </div>
            </div>
            <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                    <!-- BEGIN FOOTER -->
                    <!-- BEGIN INNER FOOTER -->
                    <div class="page-footer">
                        <div class="container"> 2016 © Metronic Theme By
                            <a target="_blank" href="http://keenthemes.com/">Keenthemes</a> &nbsp;|&nbsp;
                            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                        </div>
                    </div>
                    <div class="scroll-to-top" style="display: none;">
                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    </div>
                    <!-- END INNER FOOTER -->
                    <!-- END FOOTER -->
                </div>
            </div>
        </div>
               <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?=base_url('assets/template/vendor/')?>jquery-1.12.4.js" type="text/javascript"></script>
        <script src="<?=base_url('assets/template/vendor/')?>bootstrap.min.js.descarga" type="text/javascript"></script>
        <script src="<?=base_url('assets/template/vendor/')?>js.cookie.min.js.descarga" type="text/javascript"></script>
        <script src="<?=base_url('assets/template/vendor/')?>jquery.slimscroll.min.js.descarga" type="text/javascript"></script>
        <script src="<?=base_url('assets/template/vendor/')?>jquery.blockui.min.js.descarga" type="text/javascript"></script>
        <script src="<?=base_url('assets/template/vendor/')?>bootstrap-switch.min.js.descarga" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?=base_url('assets/template/vendor/')?>sweetalert.min.js.descarga" type="text/javascript"></script>
        <script src="<?=base_url('assets/template/vendor/')?>jquery.repeater.js.descarga" type="text/javascript"></script>
        <script src="<?=base_url('assets/template/vendor/')?>bootstrap-datepicker.min.js.descarga" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?=base_url('assets/template/vendor/')?>app.min.js.descarga" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?=base_url('assets/template/vendor/')?>ui-sweetalert.min.js.descarga" type="text/javascript"></script>
        <script src="<?=base_url('assets/template/vendor/')?>form-repeater.min.js.descarga" type="text/javascript"></script>
        <script src="<?=base_url('assets/template/vendor/')?>components-date-time-pickers.min.js.descarga" type="text/javascript"></script>
        <script src="<?=base_url('assets/js/')?>jquery.autocomplete.min.js" type="text/javascript"></script>
        
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?=base_url('assets/template/vendor/')?>layout.min.js.descarga" type="text/javascript"></script>
        <script src="<?=base_url('assets/template/vendor/')?>demo.min.js.descarga" type="text/javascript"></script>
        <script src="<?=base_url('assets/template/vendor/')?>quick-sidebar.min.js.descarga" type="text/javascript"></script>
        <script src="<?=base_url('assets/template/vendor/')?>quick-nav.min.js.descarga" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });


            })
        </script>

        <!-- { scripts propios } -->
        <?php if(isset($scripts)): ?>
        <?php foreach ($scripts as $value):?>
            <script src="<?=$value?>"></script>
        <?php endforeach; ?>
        <?php endif; ?>



<!-- { alerts } -->

<div class="sweet-overlay" tabindex="-1" style="opacity: -0.05; display: none;"></div><div class="sweet-alert hideSweetAlert" tabindex="-1" data-custom-class="" data-has-cancel-button="false" data-has-confirm-button="true" data-allow-outside-click="true" data-has-done-function="true" data-animation="pop" data-timer="null" style="display: none; margin-top: -150px; opacity: -0.01;"><div class="sa-icon sa-error" style="display: none;">
      <span class="sa-x-mark">
        <span class="sa-line sa-left"></span>
        <span class="sa-line sa-right"></span>
      </span>
    </div><div class="sa-icon sa-warning" style="display: none;">
      <span class="sa-body"></span>
      <span class="sa-dot"></span>
    </div><div class="sa-icon sa-info" style="display: block;"></div><div class="sa-icon sa-success" style="display: none;">
      <span class="sa-line sa-tip"></span>
      <span class="sa-line sa-long"></span>

      <div class="sa-placeholder"></div>
      <div class="sa-fix"></div>
    </div><div class="sa-icon sa-custom" style="display: none;"></div><h2>Sweet Alerts with Icons</h2>
    <p class="lead text-muted " style="display: block;">Info Icon</p>
    <div class="form-group">
      <input type="text" class="form-control" tabindex="3" placeholder="">
      <span class="sa-input-error help-block">
        <span class="glyphicon glyphicon-exclamation-sign"></span> <span class="sa-help-text">Not valid</span>
      </span>
    </div><div class="sa-button-container">
      <button class="cancel btn btn-lg btn-default" tabindex="2" style="display: none;">Cancel</button>
      <div class="sa-confirm-button-container">
        <button class="confirm btn btn-lg btn-info" tabindex="1" style="display: inline-block;">OK</button><div class="la-ball-fall">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div></div>
<!-- {- - -}    -->
</body></html>