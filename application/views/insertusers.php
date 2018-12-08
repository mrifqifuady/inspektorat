

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
										<div class="row justify-content-center">
											<div class="col-lg-12">
												<div class="card">
													<div class="card-body">
														<h3 class="box-title m-t-15">KM</h3>
														<hr class="m-t-0 m-b-40">
														<div class="form-validation">
															<form class="form-valide" action="<?php echo base_url('welcome/insertProcess')?>" method="post">

																<div class="form-group row">
																	<label class="col-lg-2 col-form-label" for="nama">Nama <span class="text-danger">*</span></label>
																	<div class="col-lg-8">
																		<input type="text" class="form-control input-default" id="nama" name="nama">
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-lg-2 col-form-label" for="nip">NIP <span class="text-danger">*</span></label>
																	<div class="col-lg-8">
																		<input type="text" class="form-control input-default" id="nip" name="nip">
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-lg-2 col-form-label" for="pangkatgolongan">Pangkat/Golongan <span class="text-danger">*</span></label>
																	<div class="col-lg-8">
																		<input type="text" class="form-control input-default" id="pangkatgolongan" name="pangkatgolongan">
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-lg-2 col-form-label" for="jabatan">Jabatan <span class="text-danger">*</span></label>
																	<div class="col-lg-8">
																		<input type="text" class="form-control input-default" id="jabatan" name="jabatan">
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-lg-2 col-form-label" for="username">Username <span class="text-danger">*</span></label>
																	<div class="col-lg-8">
																		<input type="text" class="form-control input-default" id="username" name="username">
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-lg-2 col-form-label" for="password">Password<span class="text-danger">*</span></label>
																	<div class="col-lg-8">
																		<input type="text" class="form-control input-default" id="password" name="password">
																	</div>
																</div>

																<div class="form-group row">
																	<label class="col-lg-2 col-form-label" for="level">Level<span class="text-danger">*</span></label>
																	<div class="col-lg-8">														
																		<select name="level" id="level" class="form-control input-default col-md-8 col-sm-8 col-xs-8 col-lg-8">
																			<option value="" selected disabled>- Pilih User -</option>
																			<option value="admin">admin</option>
																			<option value="user">user</option>
																		</select>
																	</div>
																	
																</div>



																<div class="form-group row">
																	<div class="col-lg-10 ml-auto">
																		<button type="submit" class="btn btn-info" id="submit" name="submit">Edit</button>
																	</div>
																</div>
															</table>

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