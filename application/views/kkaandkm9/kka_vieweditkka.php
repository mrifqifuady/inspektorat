<?= $header;?>
<!-- Page wrapper  -->
<div class="page-wrapper">
	<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-primary">Dashboard</h3>
		</div>
		<div class="col-md-7 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= base_url('kka') ?>">SPT</a></li>
				<li class="breadcrumb-item active">KKA</li>
				<li class="breadcrumb-item active">Insert KKA</li>
			</ol>
		</div>
	</div>
	<!-- End Bread crumb -->
	<!-- Container fluid  -->
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<form class="form-valide" action="<?php echo base_url('kkaAndKM9/editKkaProcess/'.$this->uri->segment(3))?>" enctype="multipart/form-data" method="post">
					<div><?php echo $this->session->flashdata('notif');?></div>
					<div class="field_wrapper">
							<?php for ($i=0; $i < count($kka[0]['datakka']); $i++) {
								echo "<div class=\"card\">";
								if($i==0){
									echo "<h3 class=\"card-title m-t-15\"><button class=\"btn btn-success \" id=\"btnAddField\"><span class=\"fa fa-plus\"></span></button> KKA</h3>";
								}else{
									echo "<h3 class=\"card-title m-t-15\"><button class=\"btn btn-danger \" id=\"btnDelField\"><span class=\"fa fa-minus\"></span></button> KKA</h3>";
								}

								?>
								<div class="card-body">
									<hr class="m-t-0 m-b-40">
									<div class="form-validation">
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="tittle">Tittle <span class="text-danger">*</span></label>
											<div class="col-lg-8">
												<input type="text" class="form-control input-default" id="tittle" name="tittle[]" value="<?= $kka[0]['datakka'][$i]['tittle'] ?>" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="judul">Judul <span class="text-danger">*</span></label>
											<div class="col-lg-8">
												<input type="text" class="form-control input-default" id="judul" name="judul[]" value="<?= $kka[0]['datakka'][$i]['judul']?>" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="tahun">Tahun / Masa Audit<span class="text-danger">*</span></label>
											<div class="col-lg-8">
												<input type="text" class="form-control input-default" id="tahun" name="tahun[]" value="<?= $kka[0]['datakka'][$i]['tahun'] ?>" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="kondisi<?= $i ?>">Kondisi<span class="text-danger">*</span></label>
											<div class="col-lg-10">
												<textarea class="form-control input-default" id="kondisi<?= $i ?>" name="kondisi[]" required><?= $kka[0]['datakka'][$i]['kondisi']?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="kriteria<?= $i ?>">Kriteria<span class="text-danger">*</span></label>
											<div class="col-lg-10">
												<textarea class="form-control input-default" id="kriteria<?= $i ?>" name="kriteria[]" required><?= $kka[0]['datakka'][$i]['kriteria'] ?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="pembandingan<?= $i ?>">Pembandigan<span class="text-danger">*</span></label>
											<div class="col-lg-10">
												<textarea class="form-control input-default" id="pembandingan<?= $i ?>" name="pembandingan[]" required><?= $kka[0]['datakka'][$i]['pembandingan'] ?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="simpulan<?= $i ?>">Simpulan<span class="text-danger">*</span></label>
											<div class="col-lg-10">
												<textarea class="form-control input-default" id="simpulan<?= $i ?>" name="simpulan[]" required><?= $kka[0]['datakka'][$i]['simpulan'] ?></textarea>
											</div>
										</div>
										<!-- <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="simpulan<?= $i ?>">Simpulan<span class="text-danger">*</span></label>
											<div class="col-lg-10">
                                <h6 class="card-subtitle">For multiple file upload put class <code>.dropzone</code> to form.</h6>
                                <form action="#" class="dropzone">
                                    <div class="fallback">
                                        <input name="img" type="file" multiple />
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    
										</div>
										<!-- End footer -->
									</div>
									<script type="text/javascript">
										var x = <?= $i; ?>;
										initializeIt(x);</script>
									<!-- End Page wrapper  -->
								</div>
							</div>
							<?php } ?>
						
					</div>
				</div>
				<div class="form-group row">
					<div class="col-lg-10 ml-auto">
						<button type="submit" class="btn btn-info" id="submit" name="submit">Insert</button>
					</div>
				</div>

			</form>									
		</div>
	</div>
	
</div>
<footer class="footer"> © 2018 All rights reserved.</footer>

<!-- All Jquery -->
<script src="<?= base_url('assets/js/lib/bootstrap/js/popper.min.js')?>"></script>
<script src="<?= base_url('assets/js/lib/dropzone/dropzone.js')?>"></script>

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
<script src="<?= base_url('assets/richText/jquery.richtext.js')?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var x=0;
		initializeIt(x);
		var maxField = 1;
		var addButton = $('#btnAddField');
		var wrapper = $('.field_wrapper');

		$(addButton).click(function(){
			if (x<maxField) {
				x++;
				$(wrapper).append("<div class=\"card\"><button id=\"btnDelField\" class=\"btn btn-danger col-lg-2\"><span class=\"fa fa-minus\"></span></button><h3 class=\"card-title m-t-15\"> KKA</h3><div class=\"card-body\"><hr class=\"m-t-0 m-b-40\"><div class=\"form-validation\"><div class=\"form-group row\"><label class=\"col-lg-2 col-form-label\" for=\"tittle\">Tittle <span class=\"text-danger\">*</span></label><div class=\"col-lg-8\"><input type=\"text\" class=\"form-control input-default\" id=\"tittle\" name=\"tittle[]\" required></div></div><div class=\"form-group row\"><label class=\"col-lg-2 col-form-label\" for=\"judul\">Judul <span class=\"text-danger\">*</span></label><div class=\"col-lg-8\"><input type=\"text\" class=\"form-control input-default\" id=\"judul\" name=\"judul[]\" required></div></div><div class=\"form-group row\"><label class=\"col-lg-2 col-form-label\" for=\"tahun\">Tahun / Masa Audit<span class=\"text-danger\">*</span></label><div class=\"col-lg-8\"><input type=\"text\" class=\"form-control input-default\" id=\"tahun\" name=\"tahun[]\" required></div></div><div class=\"form-group row\"><label class=\"col-lg-2 col-form-label\" for=\"kondisi\">Kondisi<span class=\"text-danger\">*</span></label><div class=\"col-lg-10\"><textarea class=\"form-control input-default\" id=\"kondisi"+x+"\" name=\"kondisi[]\" required></textarea></div></div><div class=\"form-group row\"><label class=\"col-lg-2 col-form-label\" for=\"kriteria\">Kriteria<span class=\"text-danger\">*</span></label><div class=\"col-lg-10\"><textarea class=\"form-control input-default\" id=\"kriteria"+x+"\" name=\"kriteria[]\" required></textarea></div></div><div class=\"form-group row\"><label class=\"col-lg-2 col-form-label\" for=\"pembandingan\">Pembandigan<span class=\"text-danger\">*</span></label><div class=\"col-lg-10\"><textarea class=\"form-control input-default\" id=\"pembandingan"+x+"\" name=\"pembandingan[]\" required=\"harus di isi\"></textarea></div></div><div class=\"form-group row\"><label class=\"col-lg-2 col-form-label\" for=\"simpulan\">Simpulan<span class=\"text-danger\">*</span></label><div class=\"col-lg-10\"><textarea class=\"form-control input-default\" id=\"simpulan"+x+"\" name=\"simpulan[]\" required></textarea></div></div></div></div></div>");
				initializeIt(x);
				}
			return false;
		});
		
		$(wrapper).on('click','#btnDelField', function(e){
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
			//return false;
		});
		// return false;
	});

	function initializeIt(indexke) {
		$('#kriteria'+indexke).froalaEditor();
		$('#kondisi'+indexke).froalaEditor();
		$('#pembandingan'+indexke).froalaEditor();
		$('#simpulan'+indexke).froalaEditor();
	}
</script>


<script src="<?= base_url('assets/js/lib/datatables/datatables.min.js')?>"></script>
</body>

</html>