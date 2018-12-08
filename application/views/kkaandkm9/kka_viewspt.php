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
          <li class="breadcrumb-item active">SPT</li>
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
              <h4 class="card-title">Data SPT</h4>
              <div class="table-responsive m-t-40">
                <div background:#ff0000"><?php echo $this->session->flashdata('notif');?></div>
                <!-- <?= json_encode($km9) ?> -->
              </center>

              <table id="myTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                   <th>No</th>
                   <th>No Surat</th>
                   <th>Nama</th>
                   <th>Peran</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>

                <?php 
                error_reporting(0);
                $no = 1;
                foreach ($spt as $u) {
                  echo "<tr>";
                  echo "<td>".$no++."</td>";
                  echo "<td>".$u['no_surat']."</td>";
                  for ($i=0; $i < count($u['users']); $i++) { 
                    if ($u['users'][$i]['name']==$nama) {
                      echo "<td>".$u['users'][$i]['name']."</td>";
                      echo "<td>".$u['users'][$i]['role']['name']."</td>";
                      if ($u['users'][$i]['role']['name']=="Ketua Tim") {
                        $checkKm9 = false;
                        $idKm9 = "";
                        foreach ($km9 as $km) {
                          if (in_array($u['_id'],$km['spt'])) {
                            $checkKm9=true;
                            $idKm9 = $km['_id'];
                          }
                        }
                        if(!$checkKm9){
                          echo "<td><a href=\"".base_url('kkaAndKM9/insertKm9BySpt/'.$u['_id'])."\">Buat KM9</a></td>";
                        }else{
                          echo "<td><a href=\"".base_url('kkaAndKM9/updateKm9BySpt/'.$u['_id'])."\">Ubah KM9</a> | <a href=\"".base_url('exportDom/pdfKm9/'.$idKm9)."\">Export KM9</a> | <a href=\"".base_url('kkaAndKM9/getKkaBySpt/'.$u['_id'])."\"> Lihat KKA</a></td>";
                        }
                      }elseif ($u['users'][$i]['role']['name']=="Anggota") {                        
                        $checkKm9InKKA = false;
                        foreach ($km9 as $km) {
                          if (in_array($u['_id'],$km['spt'])) {
                            $checkKm9InKKA=true;
                          }
                        }
                        if ($checkKm9InKKA) {
                          $checkKKA = false;
                          $idKKA = "";
                          foreach ($kka as $k) {
                            if (in_array($u['_id'],$k['spt'])) {
                              $checkKKA=true;
                              $idKKA = $k['_id'];
                            }
                          }
                          if (!$checkKKA) {
                            echo "<td><a href=\"".base_url('kkaAndKM9/insertKkaBySpt/'.$u['_id'])."\"> Buat KKA</a></td>";
                          }else{
                            echo "<td><a href=\"".base_url('kkaAndKM9/updateKkaBySpt/'.$k['_id'])."\"> Ubah KKA</a> | <a href=\"".base_url('exportDom/pdfkka/'.$idKKA)."\"> Export KKA</a></td>";
                          }
                        }else{
                          echo "<td>KM9 Belum Dibuat</td>";
                        }
                      }
                    }
                  }
                  echo "</tr>";
                }
                ?>
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