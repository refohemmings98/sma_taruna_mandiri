<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
<style type="text/css">
    .page-header .page-header-top .page-logo .logo-default {
    margin: 15px !important;
}
</style>
    <head>
        <meta charset="utf-8" />
        <title>E-Learning | SMA Taruna Mandiri</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page of Theme #3 for calendar page"
            name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/user') ?>/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/user') ?>/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/user') ?>/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/user') ?>/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url('assets/user') ?>/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url('assets/user') ?>/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url('assets/user') ?>/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url('assets/user') ?>/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/user') ?>/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url('assets/user') ?>/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid">
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
                                    <a href="http://localhost/sma_taruna_mandiri/Index">
                                        <img src="<?php echo base_url('assets/user') ?>/layouts/layout3/img/TMLAGI.png" alt="logo" class="logo-default"
                                    </a>
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">
                                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                                        <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                                        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                                        
                                        <!-- END NOTIFICATION DROPDOWN -->
                                        <!-- BEGIN TODO DROPDOWN -->
                                       
                                        <!-- END TODO DROPDOWN -->
                                        <li class="droddown dropdown-separator">
                                            <span class="separator"></span>
                                        </li>
                                        <!-- BEGIN INBOX DROPDOWN -->
                                       
                                        <!-- END INBOX DROPDOWN -->
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <?php if( $this->session->userdata('id_siswa') !=""){ ?>
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                               
                                                <span class="username username-hide-mobile"><?php echo $this->session->userdata('nama') ?></span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="<?php echo base_url('Index/profil_siswa')?>">
                                                        <i class="icon-user"></i> Profil Siswa </a>
                                                </li>
                                                <!-- <li>
                                                    <a href="<?php echo base_url ('Index/riwayat') ?>">
                                                        <i class="icon-user"></i> Riwayat </a>
                                                </li> --> 
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href=<?php echo base_url('Index/keluar') ?>>
                                                        <i class="icon-key"></i> Keluar </a>
                                                </li>
                                            </ul>
                                        </li>

                                    <?php }else{ ?>
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="<?php echo base_url('Index/masuk') ?>" class="dropdown-toggle" data-hover="dropdown" data-close-others="true">
                                               
                                                <span class="username username-hide-mobile">Masuk</span>
                                            </a>
                                        </li>
                                    <?php } ?>
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
                                <!-- BEGIN HEADER SEARCH BOX -->
                                <form class="search-form" action="#" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="search" data-toggle="modal" data-target=".bs-example-modal-sm" readonly="true">
                                        
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END HEADER SEARCH BOX -->
                                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                    <form action="<?php echo base_url('Index/search') ?>" method="post">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Search</h4>
                                      </div>
                                      <div class="modal-body">
                                        <input type="text" name="search" class="form-control" placeholder="search">
                                        <select name="type" class="form-control" style="margin-top: 10px;">
                                            <option value="guru">Guru</option>
                                            <option value="mapel">Mata Pelajaran</option>
                                            <option value="kelas">Kelas</option>
                                            <option value="soal">Soal</option>
                                            <option value="materi">Materi</option>
                                        </select>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-primary">Search</button>
                                      </div>
                                    </div><!-- /.modal-content -->
                                    </form>
                                  </div><!-- /.modal-dialog -->
                                </div>
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a href="<?php echo base_url ('Index');?>"> Beranda
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a href="<?php echo base_url ('Index/profil_sekolah');?>"> Profil Sekolah
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <?php if ($this->session->userdata('id_siswa')) {?>
                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a href="<?php echo base_url ('Index/materi'); ?>"> Materi
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a href="<?php echo base_url ('Soal/index'); ?>"> Soal
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a href="<?php echo base_url ('Index/riwayat') ?>"> Riwayat
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                    <?php }?>
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
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <div class="container">
                            <!-- BEGIN PAGE TITLE -->
                            <div class="page-title">
                                <h1> <?php echo $title; ?>
                                </h1>
                            </div>
                            <!-- END PAGE TITLE -->
                            <!-- BEGIN PAGE TOOLBAR -->
                            
                            <!-- END PAGE TOOLBAR -->
                        </div>
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE CONTENT BODY -->
                    <div class="page-content">
                        <div class="container">
                            <!-- BEGIN PAGE BREADCRUMBS -->
                            
                            <!-- END PAGE BREADCRUMBS -->
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class="page-content-inner">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light portlet-fit  calendar">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class=" icon-layers font-green"></i>
                                                    <span class="caption-subject font-green sbold uppercase"> <?php echo $title; ?>  </span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="row">
                                                    