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
                            <!-- <a href="<?php echo site_url('user')?>">View User</a> -->
                            <hr class="m-t-0 m-b-40">
                            <div class="form-validation">
                                <form class="form-valide" action="<?php echo base_url('welcome/editUserProcess'.'/'.$user[0]['_id'])?>" method="post">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="nama">Nama <span class="text-danger" >*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="nama" name="nama" value="<?= $user[0]['nama']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="nip">NIP <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="nip" name="nip" value="<?= $user[0]['nip']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="pangkatgolongan">Pangkat/Golongan <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="pangkatgolongan" name="pangkatgolongan" value="<?= $user[0]['pangkatgolongan']?>">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="jabatan">Jabatan <span class="text-danger" >*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="jabatan" name="jabatan" value="<?= $user[0]['jabatan']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="username">Username <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="username" name="username" value="<?= $user[0]['username']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="password">Password<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="password" name="password" value="<?= $user[0]['password']?>">
                                        </div>
                                    </div>

                                    <?php if($level=="superuser"){?>
                                        <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="level">Level<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">                                                      
                                            <select name="level" id="level" class="form-control input-default col-md-8 col-sm-8 col-xs-8 col-lg-8">
                                                <option value="" selected disabled>- Pilih User -</option>
                                                <option value="admin" <?php if ($user[0]['level']=='admin') {echo 'selected';}?>>admin</option>
                                                <option value="user" <?php if ($user[0]['level']=='user') {echo 'selected';}?>>user</option>
                                            </select>
                                        </div>

                                    </div>
                                <?php } ?>
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