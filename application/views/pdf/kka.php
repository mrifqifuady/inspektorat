<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<style>
	#main {
		border: 1px; border-style:solid solid none; border-collapse: collapse;
		width: 100%;
	}
	#main2 {
		border: 1px; border-style:none solid solid; border-collapse: collapse;
		width: 100%;
	}
	#main th, td{
		border: 1px; border-style: solid;
	}
	#isi td{
		border: 0px; border-style: solid;
		padding-left: 10px;
	}
	.pagebreak { page-break-before: always; } /* page-break-after works, as well */
</style>
</head>
<body>
	<?php 
	$datakka = $kka[0]['datakka'];
	for ($i=0; $i < count($datakka); $i++) { ?>
		<div class="row"><center><b>KERTAS KERJA AUDIT</b></center></div> <br>
		<div class="row"><?= $datakka[$i]['tittle'] ?></div>
		<div class="row">
			<table id="main">
				<tr>
					<th style="padding: 10px"><img style="max-width: 400%;" src="<?= $_SERVER['DOCUMENT_ROOT'].'/inspek/assets/logokka.jpg' ?>" ></th>
					<th style="width: 90%">KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT<br>INSPEKTORAT JENDERAL</th>
				</tr>
				<tr>
					<td colspan="2"><center>KERTAS KERJA AUDIT</center></td>
				</tr>
			</table>
			<table id="main2">
				<tr>
					<td style="width: 50%">
						<table id="isi">
							<tr>
								<td>Nama Auditi</td>
								<td> : </td>
								<td><?= $kka[0]['user']['name'] ?></td>
							</tr>
							<tr>
								<td>Tahun/Masa Audit</td>
								<td> : </td>
								<td><?= $datakka[$i]['tahun'] ?></td>
							</tr>
						</table>
					</td>
					<td style="width: 50%">
						<table id="isi" >
							<tr>
								<td>No. Ref. PKA</td>
								<td> : </td>
								<td></td>
							</tr>
							<tr>
								<td>Ref. Prog. Audit No</td>
								<td> : </td>
								<td></td>
							</tr>
							<tr>
								<td>Disusun oleh</td>
								<td> : </td>
								<td></td>
							</tr>
							<tr>
								<td>Tgl. dan paraf</td>
								<td> : </td>
								<td></td>
							</tr>
							<tr>
								<td>Direview oleh</td>
								<td> : </td>
								<td></td>
							</tr>
							<tr>
								<td>Tgl. dan paraf</td>
								<td> : </td>
								<td></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2"><center><?= $datakka[$i]['judul'] ?></center></td>
				</tr>
				<tr>
					<td colspan="2">
						<table id="isi" style="width: 100%;" >
							<tr>
								<td style="width: 2%">a.</td>
								<td>Kondisi</td>
							</tr>
							<tr>
								<td style="width: 2%"></td>
								<td><?= $datakka[$i]['kondisi'] ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table id="isi" style="width: 100%;" >
							<tr>
								<td style="width: 2%">b.</td>
								<td>Kriteria</td>
							</tr>
							<tr>
								<td style="width: 2%"></td>
								<td><?= $datakka[$i]['kriteria'] ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table id="isi" style="width: 100%;" >
							<tr>
								<td style="width: 2%">c.</td>
								<td>Pembandingan</td>
							</tr>
							<tr>
								<td style="width: 2%"></td>
								<td><?= $datakka[$i]['pembandingan'] ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table id="isi" style="width: 100%;" >
							<tr>
								<td style="width: 2%">d.</td>
								<td>Simpulan</td>
							</tr>
							<tr>
								<td style="width: 2%"></td>
								<td><?= $datakka[$i]['simpulan'] ?></td>
							</tr>
						</table>
					</td>
				</tr>

			</table>
		</div>
	</div>
	<?php	
	if ($i < count($datakka)-1) {
		echo "<div class=\"pagebreak\"> </div>";
	}
}
?>


</body>
</html>