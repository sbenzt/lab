<!DOCTYPE html>
<!-- saved from url=(0075)http://keenthemes.com/preview/metronic/theme/admin_3/page_user_login_1.html -->
<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Metronic Admin Theme #3 | User Login 1</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Preview page of Metronic Admin Theme #3 for " name="description">
        <meta content="" name="author">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?=base_url('assets/template/vendor/')?>/css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>/simple-line-icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?=base_url('assets/template/vendor/')?>/select2.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>/select2-bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url('assets/template/vendor/')?>/components.min.css" rel="stylesheet" id="style_components" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>/plugins.min.css" rel="stylesheet" type="text/css">
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?=base_url('assets/template/vendor/')?>/login.min.css" rel="stylesheet" type="text/css">
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="http://keenthemes.com/preview/metronic/theme/admin_3/favicon.ico"> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <!--div class="logo">
            <a href="http://keenthemes.com/preview/metronic/theme/admin_3/index.html">
                <img src="<?=base_url('assets/template/vendor/')?>/logo-big.png" alt=""> </a>
        </div-->
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="<?=base_url('login')?>" method="post" novalidate="novalidate">
                <h3 class="form-title font-green">Iniciar Sesión</h3>

                <?php if( validation_errors() ) : ?>
                <div class="alert alert-danger display-hide" style="display: block;">
                    <button class="close" data-close="alert"></button>
                    <span>  <?= validation_errors()?> </span>
                </div>
                <?php endif; ?>


                <?php if( isset($login_failed) ) : ?>
                <div class="alert alert-danger display-hide" style="display: block;">
                    <button class="close" data-close="alert"></button>
                    <span>  <?= $login_failed?> </span>
                </div>
            <?php endif; ?>

                <div class="form-group has-error">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input value="<?php echo set_value('user'); ?>" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="user" aria-required="true" aria-describedby="username-error"> </div>
                <div class="form-group has-error">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" aria-required="true" aria-describedby="password-error"> </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">Login</button>
                </div>
            </form>
            <!-- END LOGIN FORM -->

            
        </div>
        <div class="copyright"> 2017 © Laboratorio. </div>
    </body>
</html>