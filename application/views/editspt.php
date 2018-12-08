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
							<hr class="m-t-0 m-b-40">
							<div class="form-validation">
								<?php foreach($spt as $u) { ?>
									<form class="form-valide" action="<?php echo base_url('spt/editSptProcess'.'/'.$u['_id'])?>" method="post">
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="no_surat">No Surat <span class="text-danger">*</span></label>
											<div class="col-lg-4">
												<input type="number" class="form-control input-default" id="no_surat" name="no_surat" value="<?php echo $u['no_surat']?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="dasar">Dasar <span class="text-danger">*</span> <button id="btnInsertDasar" class="btn info">Insert Template</button></label>
											<div class="col-lg-8">
												<textarea class="textarea_editor form-control" rows="15" id="dasar" name="dasar" style="height:250px"><?php echo $u['dasar']?></textarea>
											</div>
										</div>
										<div class="col-lg-10">
											<div class="card">
												<div class="card-title row">
													<h5>Pegawai Yang Ditugas :</h5>
												</div>
												<div class="card-body">
													<div class="row">
														<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">Nama</div>
														<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">Peran</div>
														<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">Action</div>
													</div>
													<div class="field_wrapper">
														<?php if (array_key_exists('users',$u) && is_array($u['users'])) {$dataUser = $u['users'];
														$first = true;
														for ($i=0; $i < count($dataUser); $i++) { ?>
															<div>
																<div class="row">
																	<select name="nama[]" id="nama" class="form-control input-default col-md-4 col-sm-4 col-xs-4 col-lg-4">
																		<option value="" selected disabled>- Pilih User -</option>
																		<?php foreach ($user as $key) {if($key['nama']==$dataUser[$i]['name']){?>
																			<option value="<?= $key['_id'].'-*-'.$key['nama'];?>" selected><?= $key['nama'];?></option>
																		<?php }else{?>
																			<option value="<?= $key['_id'].'-*-'.$key['nama'];?>"><?= $key['nama'];?></option>
																		<?php }}?>
																	</select>
																	<select name="peran[]" id="peran" class="form-control input-default col-md-4 col-sm-4 col-xs-4 col-lg-4">
																		<option value="" selected disabled>- Pilih Peran -</option>
																		<?php foreach ($peran as $key) {if($key['peran']==$dataUser[$i]['role']['name']){?>
																			<option value="<?= $key['_id'].'-*-'.$key['peran'];?>" selected><?= $key['peran'];?></option>
																		<?php }else{?>
																			<option value="<?= $key['_id'].'-*-'.$key['peran'];?>"><?= $key['peran'];?></option>
																		<?php }}?>
																	</select>
																	<?php if ($first) {
																		$first = false;?>
																		<button id="btnAddField" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 col-lg-1"><span class="fa fa-plus"></span></button>
																	<?php }else{ ?>
																		<button id="btnDelField" class="btn btn-danger col-md-1 col-sm-1 col-xs-1 col-lg-1"><span class="fa fa-minus"></span></button>
																	<?php }?>
																	</div>
																</div>
															</div>
															<?php }} ?>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label" for="tugas">Untuk <span class="text-danger">*</span> <button id="btnInsertTugas" class="btn info">Insert Template</button></label>
													<div class="col-lg-10">
														<textarea class="textarea_editor2 form-control" rows="15" id="tugas" name="tugas"  style="height:450px">
															<?= $u['tugas']?>
														</textarea>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label" for="waktu_awal">waktu awal <span class="text-danger">*</span></label>
													<div class="col-lg-8">
														<input type="date" class="form-control input-default" id="waktu_awal" name="waktu_awal" value="<?php echo $u['waktu_awal']?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label" for="waktu_akhir">Waktu akhir <span class="text-danger">*</span></label>
													<div class="col-lg-8">
														<input type="date" class="form-control input-default" id="waktu_akhir" name="waktu_akhir" value="<?php echo $u['waktu_akhir']?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label" for="gubernur">Gubernur <span class="text-danger">*</span></label>
													<div class="col-lg-8">
														<input type="text" class="form-control input-default" id="gubernur" name="gubernur" value="<?php echo $u['gubernur'] ?>">
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
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- All Jquery -->
			<script src="<?= base_url('assets/js/lib/bootstrap/js/popper.min.js')?>"></script>

			<!-- slimscrollbar scrollbar JavaScript -->
			<script src="<?= base_url('assets/js/jquery.slimscroll.js')?>"></script>
			<!--Menu sidebar -->
			<script src="<?= base_url('assets/js/sidebarmenu.js')?>"></script>
			<!--stickey kit -->
			<script src="<?= base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
			<script src="<?= base_url('assets/js/lib/html5-editor/wysihtml5-0.3.0.js')?>"></script>
			<script src="<?= base_url('assets/js/lib/html5-editor/bootstrap-wysihtml5.js')?>"></script>
			<script src="<?= base_url('assets/js/lib/html5-editor/wysihtml5-init.js')?>"></script>
			<!--Custom JavaScript -->
			<script src="<?= base_url('assets/js/custom.min.js')?>"></script>
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
					$('#table1').DataTable();
				} );
			</script>

			<script type="text/javascript">
				$(document).ready(function() {
					var x=1;
					var maxField = 10;
					var addButton = $('#btnAddField');
					var wrapper = $('.field_wrapper');
					var fieldHTML = "<div><div class=\"row\"><select name=\"nama[]\" id=\"nama\" class=\"form-control input-default col-md-4 col-sm-4 col-xs-4 col-lg-4\"><option value=\"\" selected disabled>- Pilih User -</option><?php foreach ($user as $key) {?><option value=\"<?= $key['_id'].'-*-'.$key['nama'];?>\"><?= $key['nama'];?></option><?php }?></select><select name=\"peran[]\" id=\"peran\" class=\"form-control inpt-default col-md-4 col-sm-4 col-xs-4 col-lg-4\"><option value=\"\" selected disabled>- Pilih Peran -</option><?php foreach ($peran as $key) {?><option value=\"<?= $key['_id'].'-*-'.$key['peran'];?>\"><?= $key['peran'];?></option><?php }?></select><button id=\"btnDelField\" class=\"btn btn-danger col-md-1 col-sm-1 col-xs-1 col-lg-1\"><span class=\"fa fa-minus\"></span></button></div></div>";
					var templateDasar = "<ol><li>Peraturan Daerah Profinsi Jawa Timur Nomor 11 Tahun 2016 tentang Pembentukan dan Susunan Peragkat Daerah.</li><li>Peraturan Gubernur Jawa Timur 60 Tahun 2016 tentang Kependudukan Susunan Organisasi. Uraian Tugas dan fungsi serta Tata Kerja Inspektorat Provinsi Jawa Timur.</li><li>Dokumen Pelaksanaan Anggaran Inspektorat Provinsi Jawa Timur Tahun 2017 tanggal 27 Desember 2016 Nomor: 914/477/213.2/2016.<br></li></ol>";
					var templateTugas = "<div>Melaksanakan Evaluasi Kelengkapan Penanggungjawaban SPJ bulan Januari s.d Juni 2017 pada UPT. Perlindungan dan Pelayanan Sosial Anak Trenggalek, Dinas Sosial Provinsi Jawa Timur.</div><div>Waktu Pelaksanaan tugas mulai tanggal 14 s.d 20 September 2017.</div><div>Kepada pihak-pihak yang bersangkutan diminta&nbsp; kesediaannya untuk memberikan bantuan data serta keterangan yang diperlukan guna kelancaran dan penyelesaian tugas dimaksud.</div><div>Seluruh biaya kegiatan dibenkan pada DPA Inspektorat Provinsi Jawa Timur Tahun 2017.<br></div>";

					$(addButton).click(function(){
						if (x<maxField) {
							x++;
							$(wrapper).append(fieldHTML);
						}
						return false;
					});
					$(wrapper).on('click','#btnDelField', function(e){
						e.preventDefault();
						$(this).parent('div').remove();
						x--;
						return false;
					});

		// button template
		$("#btnInsertDasar").click(function(){
			$("#dasar").val(templateDasar);
			return false;
		});
		$("#btnInsertTugas").click(function(){
			$("#tugas").val(templateTugas);
			return false;
		})
		return false;
	});
</script>
</body>
</html>