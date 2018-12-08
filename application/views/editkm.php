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
                <div class="justify-content-center">
                    <div class="form-validation">
		              <form class="form-valide"  action="<?php echo base_url('km/editKmProcess'.'/'.$u['_id'])?>" method="post">
                        <div class="row-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="nama_objek">Nama Objek <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="nama_objek" name="nama_objek" value="<?= $nama_objek?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="alamat">alamat <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="alamat" name="alamat" value="<?= $alamat;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="sasaran">sasaran <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="sasaran" name="sasaran" value="<?= $sasaran;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="tahun">tahun <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="tahun" name="tahun" value="<?= $tahun;?>" required>
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
                                    <label class="col-lg-3 col-form-label" for="persiapan_t">Tujuan Pemeriksaan<span class="text-danger">*</span></label>
                                    <div class="col-lg-5">
                                        <textarea class="form-control input-default" id="persiapan_t" name="persiapan_t" placeholder="Masukan Tujuan Pemeriksaan" required><?= $km['pemerikasaan_t'];?></textarea>
                                    </div>
                                </div>
                                <?php
                                    for ($i=0; $i < $km[0]['pemeriksaan_p']; $i++) { ?>
                                        <div class="wrapperPersiapan">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="persiapan_p">Prosedur Pemeriksaan <span class="text-danger">*</span></label>
                                                <div class="col-lg-5">
                                                    <textarea class="form-control input-default" id="persiapan_p" name="persiapan_p[]" placeholder="Masukan Prosedur Pemeriksaan" required><?= $km[0]['pemeriksaan_p'][$i]?></textarea>
                                                </div>
                                                <button id="btnAddPersiapan" class="btn btn-primary"><span class="fa fa-plus"></span></button>
                                            </div>
                                        </div>
                                    <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="row-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="box-title m-t-15">PROGRAM PELAKSANAAN</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="pelaksanaan_p">Tujuan Pelaksanaan<span class="text-danger">*</span></label>
                                    <div class="col-lg-5">
                                        <textarea class="form-control input-default" id="pelaksanaan_t" name="pelaksanaan_t" placeholder="Masukan Tujuan Pelaksanaan" required><?= $km[0]['pelaksanaan_t']?></textarea>
                                        </div>
                                </div>
                                <?php for ($i=0; $i < $km[0]['pelaksanaan_p']; $i++) { ?>
                                        <div class="wrapperPelaksanaan">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="pelaksanaan_p">Prosedur Pelaksanaan<span class="text-danger">*</span></label>
                                                <div class="col-lg-5">
                                                    <textarea class="form-control input-default" id="pelaksanaan_p" name="pelaksanaan_p[]" placeholder="Masukan Prosedur Pelaksanaan" required><?= $km[0]['pelaksanaan_p'][$i]?></textarea>
                                                </div>
                                                <button id="btnAddPelaksanaan" class="btn btn-primary"><span class="fa fa-plus"></span></button>
                                            </div>
                                        </div>
                                    <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="row-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="box-title m-t-15">PROGRAM PENYELESAIAN</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="penyelesaian_t">Tujuan Penyelesaian<span class="text-danger">*</span></label>
                                    <div class="col-lg-5">
                                        <textarea class="form-control input-default" id="penyelesaian_t" name="penyelesaian_t" placeholder="Masukan Tujuan Penyelesaian" value="<?= $km[0]['penyelesaian_t']?>" required></textarea>
                                        </div>
                                    </div>
                                    <?php for ($i=0; $i < $km[0]['penyelesaian_p']; $i++) { ?>
                                        <div class="wrapperPenyelesaian">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="penyelesaian_p">Prosedur Penyelesaian<span class="text-danger">*</span></label>
                                            <div class="col-lg-5">
                                                <textarea class="form-control input-default" id="penyelesaian_p" name="penyelesaian_p[]" placeholder="Masukan Prosedur Penyelesaian" required><?= $km[0]['penyelesaian_p'][$i]?></textarea>
                                            </div>
                                            <button id="btnAddPenyelesaian" class="btn btn-primary"><span class="fa fa-plus"></span></button>
                                        </div>
                                    </div>
                                    <?php }?>
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
                                        <input type="text" class="form-control input-default" id="pengendali_teknis" name="pengendali_teknis"  value="<?= $km[0]['pengendali_teknis']?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="ketua_tim">ketua tim <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control input-default" id="ketua_tim" name="ketua_tim" value="<?= $km[0]['ketua_tim']?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="tanggal">tanggal <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="date" class="form-control input-default" id="tanggal" name="tanggal" value="<?= $km[0]['tanggal']?>" required>
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

        $(document).ready(function() {
            var x=1;
            var maxField = 10;
            var addPersiapan = $('#btnAddPersiapan');
            var addPelaksanaan = $('#btnAddPelaksanaan');
            var addPenyeleseian = $('#btnAddPenyelesaian');
            var wrapperPeriapan = $('.wrapperPersiapan');
            var wrapperPenyelesaian = $('.wrapperPenyelesaian');
            var wrapperPelaksanaan = $('.wrapperPelaksanaan');
            var templatePersiapan = "<div class=\"wrapperPersiapan\"><div class=\"form-group row\"><label class=\"col-lg-3 col-form-label\" for=\"persiapan_p\">Prosedur Pemeriksaan <span class=\"text-danger\">*</span></label><div class=\"col-lg-5\"><textarea class=\"form-control input-default\" id=\"persiapan_p\" name=\"persiapan_p[]\" placeholder=\"Masukan Prosedur Pemeriksaan\"></textarea></div><button id=\"btnDelPersiapan\" class=\"btn btn-danger\"><span class=\"fa fa-minus\"></span></button></div></div>";
            var templatePelaksanaan = "<div class=\"wrapperPelaksanaan\"><div class=\"form-group row\"><label class=\"col-lg-3 col-form-label\" for=\"pelaksanaan_p\">Prosedur Pelaksanaan<span class=\"text-danger\">*</span></label><div class=\"col-lg-5\"><textarea class=\"form-control input-default\" id=\"pelaksanaan_p\" name=\"pelaksanaan_p[]\" placeholder=\"Masukan Prosedur Pelaksanaan\" required></textarea></div><button id=\"btnDelPelaksanaan\" class=\"btn btn-danger\"><span class=\"fa fa-minus\"></span></button></div></div>";
            var templatePenyelesaian = "<div class=\"wrapperPenyelesaian\"><div class=\"form-group row\"><label class=\"col-lg-3 col-form-label\" for=\"penyelesaian_p\">Prosedur Pelaksanaan<span class=\"text-danger\">*</span></label><div class=\"col-lg-5\"><textarea class=\"form-control input-default\" id=\"penyelesaian_p\" name=\"penyelesaian_p[]\" placeholder=\"Masukan Prosedur Penyelesaian\" required></textarea></div><button id=\"btnDelPenyelesaian\" class=\"btn btn-danger\"><span class=\"fa fa-minus\"></span></button></div></div>";
            $(addPersiapan).click(function(){
                if (x<maxField) {
                    x++;
                    $(wrapperPeriapan).append(templatePersiapan);
                }
                return false;
            });
            $(addPelaksanaan).click(function(){
                if (x<maxField) {
                    x++;
                    $(wrapperPelaksanaan).append(templatePelaksanaan);
                }
                return false;
            });
            $(addPenyeleseian).click(function(){
                if (x<maxField) {
                    x++;
                    $(wrapperPenyelesaian).append(templatePenyelesaian);
                }
                return false;
            });

            $(wrapperPeriapan).on('click','#btnDelPersiapan', function(e){
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
                return false;
            });
            $(wrapperPelaksanaan).on('click','#btnDelPelaksanaan', function(e){
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
                return false;
            });
            $(wrapperPenyelesaian).on('click','#btnDelPenyelesaian', function(e){
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
                return false;
            });


        });
    </script>
</body>

</html>