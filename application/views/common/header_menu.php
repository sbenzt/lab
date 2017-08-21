<!DOCTYPE html>
<!-- saved from url=(0070)http://keenthemes.com/preview/metronic/theme/admin_3/portlet_ajax.html -->
<html lang="en"><!--<![endif]--><!-- BEGIN HEAD -->
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Preview page of Metronic Admin Theme #3 for ajax bootstrap portlet samples" name="description">
        <meta content="" name="author">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?=base_url('assets/template/vendor/')?>autocomplete.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>simple-line-icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>bootstrap-switch.min.css" rel="stylesheet" type="text/css">
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?=base_url('assets/template/vendor/')?>sweetalert.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>jquery.notific8.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>toastr.min.css" rel="stylesheet" type="text/css">
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url('assets/template/vendor/')?>components.min.css" rel="stylesheet" id="style_components" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>plugins.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>profile.min.css" rel="stylesheet" type="text/css">
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?=base_url('assets/template/vendor/')?>layout.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/template/vendor/')?>default.min.css" rel="stylesheet" type="text/css" id="style_color">
        <link href="<?=base_url('assets/template/vendor/')?>custom.min.css" rel="stylesheet" type="text/css">
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="http://keenthemes.com/preview/metronic/theme/admin_3/favicon.ico"> 
        <base href="<?=base_url()?>">
        
        </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid" style="">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                <div class="page-logo">
                                    <a href="http://keenthemes.com/preview/metronic/theme/admin_3/index.html">
                                        <!--img src="<?=base_url('assets/template/vendor/')?>logo-default.jpg" alt="logo" class="logo-default"-->
                                        <h3><b>Laboratorio</b></h3>
                                    </a>
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">

                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle" src="<?=base_url('assets/template/vendor/')?>avatar9.jpg">
                                                <span class="username username-hide-mobile">Oscar Gallardo</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="<?=base_url('configuracion')?>"><i class="fa fa-gear" aria-hidden="true"></i> Configuración</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url('logout')?>"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> Cerrar Sesión</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END USER LOGIN DROPDOWN -->
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="<?=base_url('ingresar_ordenes')?>"> Ingresar Ordenes
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  ">
                                            <a href="<?=base_url('ingresar_resultados')?>"> Ingresar Resultados
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="<?=base_url('consultar_informacion')?>"> Consultar Información
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  mega-menu-full">
                                            <a href="<?=base_url('facturacion')?>"> Facturación
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown active">
                                            <a href="<?=base_url('caja')?>"> Caja
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        
                    