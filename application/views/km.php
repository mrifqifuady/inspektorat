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
		<a href="<?php echo site_url('km/insertKm')?>" class="btn btn-info btn-rounded m-b-10 m-l-5" type="button">Add User</a>
		<div background:#ff0000"><?php echo $this->session->flashdata('notif');?></div>
	</center>
	
	<table id="myTable" class="table table-bordered table-striped">
                                <thead>
		<tr>
			<th>No</th>
			<th>Nama Objek Penugasan</th>
			<th>Alamat</th>
			<th>Sasaran</th>
			<th>Tahun</th>
			<!-- <th>Tujuan Pemeriksaan</th>
			<th>Prosedur Pemeriksaan</th>
			<th>Tujuan Pelaksanaan</th>
			<th>Prosedur Pelaksanaan</th>
			<th>Tujuan Penyelesaian</th>
			<th>Prosedur Penyelesaian</th> -->
			<th>Tanggal</th>
			<th>Pengendali Teknis</th>
			<th>Ketua Tim</th>
			<th>Action</th>
			
		</tr>
		</thead>
                                <tbody>
		<?php 
		$no = 1;
		foreach($km as $u){ 
            $pemeriksaan = "";
            $pelaksanaan = "";
            $penyelesaian= "";
            if (array_key_exists('pemeriksaan_p',$u)) {
                $dataPemeriksaan = $u['pemeriksaan_p'];
                $dataPelaksanaan = $u['pelaksanaan_p'];
                $dataPenyelesaian = $u['penyelesaian_p'];

                for ($i=0; $i < count($dataPemeriksaan); $i++) { 
                    $pemeriksaan = $pemeriksaan."- ".$dataPemeriksaan[$i]."<br>";
                }
                for ($i=0; $i < count($dataPelaksanaan); $i++) { 
                    $pelaksanaan = $pelaksanaan."- ".$dataPelaksanaan[$i]."<br>";
                }
                for ($i=0; $i < count($dataPenyelesaian); $i++) { 
                    $penyelesaian = $penyelesaian."- ".$dataPenyelesaian[$i]."<br>";
                }
            }else{
                $pemeriksaan = "<center>-</center>";
                $pelaksanaan = "<center>-</center>";
                $penyelesaian= "<center>-</center>";

            }

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u['nama_objek'] ?></td>
			<td><?php echo $u['alamat'] ?></td>
			<td><?php echo $u['sasaran'] ?></td>
			<td><?php echo $u['tahun'] ?></td>
			<!-- <td><?php echo $u['pemerikasaan_t'] ?></td>
			<td><?= $pemeriksaan ?></td>
			<td><?php echo $u['pelaksanaan_t'] ?></td>
			<td><?= $pelaksanaan ?></td>
			<td><?php echo $u['penyelesaian_t'] ?></td>
			<td><?= $penyelesaian ?></td>
			 --><td><?php echo $u['tanggal'] ?></td>
			<td><?php echo $u['pengendali_teknis'] ?></td>
			<td><?php echo $u['ketua_tim'] ?></td>
			
			<td>
			      <a href="<?php echo base_url('km/editKm/'.$u['_id']); ?>" class="btn btn-info btn-rounded m-b-10 m-l-5" type="button">Edit</a> |
			      <a href="<?php echo base_url('km/deleteKm/'.$u['_id']); ?>" class="btn btn-info btn-danger m-b-10 m-l-5" type="button">Delete</a> | 
                  <a href="<?php echo base_url('exportDom/pdfKm9/'.$u['_id']); ?>" class="btn btn-info btn-warning m-b-10 m-l-5" type="button">Export PDF</a>

                              
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