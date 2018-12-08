
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
   <link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/helper.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css')?>" rel="stylesheet">
    <!-- JQuery -->
    <script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
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
                        <li> <a  href="<?php echo site_url('welcome')?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Nama </a></li>
                        <li> <a  href="<?php echo site_url('peran')?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Peran </a></li>
                        <li> <a  href="<?php echo site_url('spt')?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">SPT </a></li>
                        <li> <a  href="<?php echo site_url('km')?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">KM9 </a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <div class="justify-content-center">
                    <div class="form-validation">
                    <form class="form-valide" action="<?php echo base_url('km/insertProcess')?>" method="POST">
                        <div class="row-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="nama_objek">Nama Objek <span class="text-danger">*</span></label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control input-default" id="nama_objek" name="nama_objek">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="alamat">alamat <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="alamat" name="alamat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="sasaran">sasaran <span class="text-danger">*</span></label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control input-default" id="sasaran" name="sasaran">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="tahun">tahun <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="tahun" name="tahun">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="box-title m-t-15">PROGRAM PERSIAPAN</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="persiapan_t">Tujuan Pemeriksaan<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control input-default" id="persiapan_t" name="persiapan_t" placeholder="Masukan Tujuan Pemeriksaan"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="wraperPemeriksaan">
                                        <div class="row">
                                            <label class="col-lg-2 col-form-label" for="persiapan_p">Prosedur Pemeriksaan <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control input-default" id="persiapan_p" name="persiapan_p" placeholder="Masukan Prosedur Pemeriksaan"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-3">
                                                <h5 >Rencana</h5>
                                                <div class="form-group">
                                                    <label class="col-form-label" for="rp_oleh">Dilakukan Oleh<span class="text-danger">*</span></label>
                                                    <input type="text" name="rp_oleh" id="rp_oleh" class="form-control input-default">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" for="rp_waktu">Anggaran Waktu <span class="text-danger">*</span></label>
                                                    <input type="text" name="rp_oleh" id="rp_oleh" class="form-control input-default">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <h5 >Realisasi</h5>
                                                <div class="form-group">
                                                    <label class="col-form-label" for="rp_oleh">Dilakukan Oleh<span class="text-danger">*</span></label>
                                                    <input type="text" name="rp_oleh" id="rp_oleh" class="form-control input-default">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" for="rp_waktu">Anggaran Waktu <span class="text-danger">*</span></label>
                                                    <input type="text" name="rp_oleh" id="rp_oleh" class="form-control input-default">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="box-title m-t-15">PROGRAM PELAKSANAAN</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="pelaksanaan_p">Tujuan Pelaksanaan<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control input-default" id="pelaksanaan_p" name="pelaksanaan_p" placeholder="Masukan Tujuan Pelaksanaan"></textarea>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="pelaksanaan_p">Prosedur Pelaksanaan<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control input-default" id="pelaksanaan_p" name="pelaksanaan_p" placeholder="Masukan Prosedur Pelaksanaan"></textarea>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="box-title m-t-15">PROGRAM PENYELESAIAN</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="penyelesaian_t">Tujuan Penyelesaian<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control input-default" id="penyelesaian_t" name="penyelesaian_t" placeholder="Masukan Tujuan Pelaksanaan"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="penyelesaian_p">Prosedur Pelaksanaan<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control input-default" id="penyelesaian_p" name="penyelesaian_p" placeholder="Masukan Prosedur Penyelesaian"></textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="pengendali_teknis">pengendali teknis <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control input-default" id="pengendali_teknis" name="pengendali_teknis">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="ketua_tim">ketua tim <span class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control input-default" id="ketua_tim" name="ketua_tim">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="tanggal">tanggal <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="date" class="form-control input-default" id="tanggal" name="tanggal">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-10 ml-auto">
                            <button type="submit" class="btn btn-info" id="submit" name="submit">Insert</button>
                        </div>
                    </div>
                </form>	

	<footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?= base_url('assets/js/lib/bootstrap/js/popper.min.js')?>"></script>
    
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('assets/js/jquery.slimscroll.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('assets/js/sidebarmenu.js')?>"></script>
    <!--stickey kit -->
    <script src="<?= base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
    <!-- Form validation -->
    <script src="<?= base_url('assets/js/lib/form-validation/jquery.validate.min.js')?>"></script>
    <script src="<?= base_url('assets/js/lib/form-validation/jquery.validate-init.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/js/custom.min.js')?>"></script>
    <script src="<?= base_url('assets/js/lib/datatables/datatables.min.js')?>"></script>
    <script src="<?= base_url('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?= base_url('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')?>"></script>
    <script src="<?= base_url('assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')?>"></script>
    <script src="<?= base_url('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')?>"></script>
    <script src="<?= base_url('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')?>"></script>
    <script src="<?= base_url('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')?>"></script>
    <script src="<?= base_url('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')?>"></script>
    <script src="<?= base_url('assets/js/lib/datatables/datatables-init.js')?>"></script>


    <script src="<?= base_url('assets/js/lib/datatables/datatables.min.js')?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
        } );

        $(document).ready(function() {
            $('#table1').DataTable();
        } );
    </script>
</body>

</html>