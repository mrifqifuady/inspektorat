<!DOCTYPE html>
<html lang="en">
<?php if(!isset($level))$level = ""; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Inspektorat</title>
    <!-- Bootstrap Core CSS -->
   <link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/helper.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/lib/dropzone/dropzone.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/richText/richtext.min.css')?>" rel="stylesheet">
    <!-- froala -->
     <!-- Include Editor style. -->
    <link href="<?= base_url('assets/froala/css/froala_editor.pkgd.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/froala/css/froala_style.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- JQuery -->
    <script src="<?= base_url('assets/js/jquery.min.js')?>"></script>

    <script type="text/javascript" src="<?= base_url('assets/froala/js/froala_editor.pkgd.min.js')?>"></script>

    <!-- <script src="<?= base_url('assets/richText/jquery.richtext.js')?>"></script> -->
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0"></ul>
                    <ul class="navbar-nav my-lg-0">
                        
                    <a href="<?php echo site_url('login/logout')?>"><i class="fa fa-power-off"></i> Logout</a>
                    </ul>
                    
                </div>
            </nav>
                        
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <?php if ($level=="superuser") { ?>
                            <li> <a  href="<?php echo site_url('welcome')?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">User </a></li>
                            <li> <a  href="<?php echo site_url('peran')?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Peran </a></li>
                        <?php } ?>
                        <?php if($level=="user" || $level=="admin"){?>
                            <li> <a  href="<?php echo site_url('welcome/editUser/'.$_SESSION['user']['iduser'])?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Edit Data</a></li>
                        <?php } ?>
                        <?php if ($level=="admin" || $level=="superuser" ) { ?>
                            <li> <a  href="<?php echo site_url('spt')?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">SPT </a></li>
                        <?php } ?>
                        <?php if($level=="user" || $level=="superuser"){?>
                            <li> <a  href="<?php echo site_url('kkaAndKm9')?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">KKA/KM9 </a></li>
                                <?php } ?>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->