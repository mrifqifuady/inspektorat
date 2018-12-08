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
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Export</h4>
                            <div class="table-responsive m-t-40">
                                <a href="<?php echo site_url('spt/insertSpt')?> " class="btn btn-info btn-rounded m-b-10 m-l-5" type="button">Add SPT</a>
                                <div><?php echo $this->session->flashdata('notif');?></div>
                                <br>
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Surat</th>
                                            <th>Nama</th>
                                            <th>Peran</th>
                                            <th>Waktu Awal</th>
                                            <th>Waktu Akhir</th>
                                            <th>Gubernur</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($spt as $u){ 
                                            $nama = "";
                                            $peran = "";
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $u['no_surat'] ?></td>
                                                <?php 

                                                if (array_key_exists('users',$u) && is_array($u['users'])) {
                                                    $dataUser = $u['users'];
                                                    for ($i=0; $i < count($dataUser); $i++) {
                                                        $nama =$nama."- ".$dataUser[$i]['name'].' <br>';
                                                        $peran = $peran."- ".$dataUser[$i]['role']['name'].' <br>';
                                                    }
                                                    $i=0;
                                                }else{
                                                    $nama='<center>-</center>';
                                                    $peran='<center>-</center>';
                                                }
                                                ?>
                                                <td><?= $nama ?></td>
                                                <td><?= $peran ?></td>
                                                <td><?= date("d-m-Y", strtotime($u['waktu_awal'])) ?></td>
                                                <td><?= date("d-m-Y", strtotime($u['waktu_akhir'])) ?></td>
                                                <td><?php echo $u['gubernur'] ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('spt/editSpt/'.$u['_id']); ?>" class="btn btn-info btn-rounded m-b-10 m-l-5" type="button">Edit</a> |
                                                    <a href="<?php echo base_url('spt/deleteSpt/'.$u['_id']); ?>" class="btn btn-danger btn-rounded m-b-10 m-l-5" type="button">Delete</a>
                                                    <a href="<?= base_url('export/pdfSPT/'.$u['_id']);?>" class="btn btn-info btn-warning m-b-10 m-l-5" type="button">Export PDF</a>


                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
<!-- footer -->
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