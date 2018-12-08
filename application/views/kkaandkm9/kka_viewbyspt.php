<?= $header;?>
<!-- Page wrapper  -->
<div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Dashboard</h3> </div>
      <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('kka') ?>">SPT</a></li>
          <li class="breadcrumb-item active">KKA</li>
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
              <h4 class="card-title">Data Kertas Kerja Audit</h4>
              <div class="table-responsive m-t-40">
                <a href="<?php echo site_url('kka/insertKka/'.$this->uri->segment(3))?>">Add KKA</a>
                <div background:#ff0000"><?php echo $this->session->flashdata('notif');?></div>
                
              </center>

              <table id="myTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                   <th>No</th>
                   <th>Tittle</th>
                   <th>Judul</th>
                   <th>Nama Auditi</th>
                   <th>Tahun/Masa Audit</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>
                <?php 
                $no = 1;

                // foreach ($kka as $u) {
                  
                  
                  for ($i=0; $i < count($kka[0]['datakka']); $i++) {                     
                    echo "<tr>";
                  echo "<td>".$no++."</td>";

                    $tittle = "";
                    $judul = "";
                    $tahun = "";
                    $tittle = $tittle."- ".$kka[0]['datakka'][$i]['tittle']."<br>";
                    $judul = $tittle."- ".$kka[0]['datakka'][$i]['judul']."<br>";
                    $tahun = $tittle."- ".$kka[0]['datakka'][$i]['tahun']."<br>";

                      echo "<td>".$tittle."</td>";
                    echo "<td>".$judul."</td>";
                    echo "<td>".$kka[0]['user']['name']."</td>";
                    echo "<td>".$tahun."</td>";
                  echo "<td><a href=\"".base_url('kka/editKka/'.$kka[0]['_id'])."\"> Edit</a> | <a href=\"".base_url('kka/deleteKka/'.$kka[0]['_id'])."\"> Delete</a> | <a href=\"".base_url('exportDom/pdfkka/'.$kka[0]['_id'])."\"> Export</a></td>";
                  echo "</tr>";
                  }
                  
                // }
                
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