<?= $header;?>
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
                                <a href="<?php echo site_url('peran')?>">View User</a>
                                <hr class="m-t-0 m-b-40">
                                <div class="form-validation">
	
	</center>
		<?php foreach($peran as $u) {?>
		 <form class="form-valide" action="<?php echo base_url('peran/editPeranProcess'.'/'.$u['_id'])?>" method="post">
		<div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="peran">peran <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control input-default" id="peran" name="peran" value="<?php echo $u['peran']?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-10 ml-auto">
                                                <button type="submit" class="btn btn-info" id="submit" name="submit">Edit</button>
                                            </div>
                                        </div>

	</form>	
	<?php } ?>

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