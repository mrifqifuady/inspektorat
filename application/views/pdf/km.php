<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<style>
		 table{
		      width: 100%;
		  }
		  #isi th{
		  	border: 1px; border-style: solid;
		  	text-align: center;
		  }
		  #isi td{
		  	border: 1px; border-style: solid;
		  }		  
	</style>
	<style type="text/css">
		.column0{
			float: left;
		    width: 5%;
		}
		.column {
		    float: left;
		    width: 20%;
		}
		.column2{
			float: left;
		    width: 40%;	
		}
		.column3{
			float: left;
		    width: 35%;	
		}
		.row:after {
		    content: "";
		    display: table;
		    clear: both;
		}
	</style>
</head>
<body>
	<div id="header">
		<img src="<?= $_SERVER['DOCUMENT_ROOT'].'/inspek/assets/header.PNG' ?>" width="100%" >
	</div>
	<div id="judul" class="row">
		<table border="0px">
			<tr>
				<td style="width:22.5%">Nama Obyek Penugasan</td>
				<td style="width:1%"> : </td>
				<td> <?= $km[0]['nama_objek']?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td> <?= $km[0]['alamat']?></td>
			</tr>
			<tr>
				<td>Sasaran</td>
				<td> : </td>
				<td> <?= $km[0]['sasaran']?></td>
			</tr>
			<tr>
				<td>Tahun</td>
				<td> : </td>
				<td> <?= $km[0]['tahun']?></td>
			</tr>
		</table>
	</div><br>
	<div class="row"><center>PROGRAM PERSIAPAN</center></div>
	<div id="isi" class="row">
		<table style="border: 1px; border-style:solid solid none; border-collapse: collapse; ">
			<tr>
				<th colspan="2"> Uraian, tujuan dan</th>
				<th colspan="2"> Rencana </th>
				<th colspan="2"> Realisasi </th>
				<th style="width: 10%" rowspan="3"> REF KKE </th>
			</tr>
			<tr>
				<th colspan="2">prosedur pemeriksaan</th>
				<th style="width: 10%" rowspan="2">dilaks<br>oleh</th>
				<th style="width: 10%" rowspan="2">angg.<br>waktu</th>
				<th style="width: 10%" rowspan="2">dilaks<br>oleh</th>
				<th style="width: 10%" rowspan="2">angg.<br>waktu</th>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
		</table>
		<table style="border: 1px; border-style:none solid solid; border-collapse: collapse; ">
			<tr>
				<!-- <td > <font color="#FFFFFF">NO</font></td> -->
				<th style="width: 3%"></th>
				<th style="text-align: left;">Tujuan</th>
				<th style="width: 10%"></th>
				<th style="width: 10%"></th>
				<th style="width: 10%"></th>
				<th style="width: 10%"></th>
				<th style="width: 10%"></th>
			</tr>

			<tr>
				<td></td>
				<td><?= $km[0]['pemerikasaan_t'];?></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<!-- <td > <font color="#FFFFFF">NO</font></td> -->
				<th ></th>
				<th style="text-align: left;">Prosedur</th>
				<th ></th>
				<th ></th>
				<th ></th>
				<th ></th>
				<th ></th>
			</tr>
			<?php 
    		$pemeriksaan = "";
    		for ($i=0; $i < count($km[0]['pemeriksaan_p']); $i++) { ?>
    			<tr>
			        <td style="width:3%; text-align:center;"><?= $i+1; ?></td>
			        <td><?= $km[0]['pemeriksaan_p'][$i];?><br></td>
			        <td></td>
			        <td></td>
			        <td></td>
			        <td></td>
			        <td></td>
		    	</tr>
    		<?php }?>
    		<tr>
		        <td ></td>
		        <td style="text-align: right;">Jumlah HP<br></td>
		        <td ></td>
		        <td ></td>
		        <td ></td>
		        <td ></td>
		        <td ></td>
		    </tr>			
		</table>
	</div>

	<div class="row"><center>PROGRAM PELAKSANAAN</center></div>
	<div id="isi" class="row">
		<table style="border: 1px; border-style:solid; border-collapse: collapse; ">
			<tr>
			<!-- <td > <font color="#FFFFFF">NO</font></td> -->
				<th style="width: 3%"></th>
				<th style="text-align: left;">Tujuan</th>
				<th style="width: 10%"></th>
				<th style="width: 10%"></th>
				<th style="width: 10%"></th>
				<th style="width: 10%"></th>
				<th style="width: 10%"></th>
			</tr>

			<tr>
				<td></td>
				<td><?= $km[0]['pelaksanaan_t'];?></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<!-- <td > <font color="#FFFFFF">NO</font></td> -->
				<th ></th>
				<th style="text-align: left;">Prosedur</th>
				<th ></th>
				<th ></th>
				<th ></th>
				<th ></th>
				<th ></th>
			</tr>
			<?php 
    		$pelaksanaan = "";
    		for ($i=0; $i < count($km[0]['pelaksanaan_p']); $i++) { ?>
    			<tr>
			        <td style="width:3%; text-align:center;"><?= $i+1; ?></td>
			        <td><?= $km[0]['pelaksanaan_p'][$i];?><br></td>
			        <td></td>
			        <td></td>
			        <td></td>
			        <td></td>
			        <td></td>
		    	</tr>
    		<?php }?>
    		<tr>
		        <td ></td>
		        <td style="text-align: right;">Jumlah HP<br></td>
		        <td ></td>
		        <td ></td>
		        <td ></td>
		        <td ></td>
		        <td ></td>
		    </tr>
		</table>
	</div>

	<div class="row"><center>PROGRAM PENYELESAIAN</center></div>
	<div id="isi" class="row">
		<table style="border: 1px; border-style:solid; border-collapse: collapse; ">
			<tr>
			<!-- <td > <font color="#FFFFFF">NO</font></td> -->
				<th style="width: 3%"></th>
				<th style="text-align: left;">Tujuan</th>
				<th style="width: 10%"></th>
				<th style="width: 10%"></th>
				<th style="width: 10%"></th>
				<th style="width: 10%"></th>
				<th style="width: 10%"></th>
			</tr>

			<tr>
				<td></td>
				<td><?= $km[0]['penyelesaian_t'];?></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<!-- <td > <font color="#FFFFFF">NO</font></td> -->
				<th ></th>
				<th style="text-align: left;">Prosedur</th>
				<th ></th>
				<th ></th>
				<th ></th>
				<th ></th>
				<th ></th>
			</tr>
			<?php 
    		$penyelesaiaan = "";
    		for ($i=0; $i < count($km[0]['penyelesaian_p']); $i++) { ?>
    			<tr>
			        <td style="width:3%; text-align:center;"><?= $i+1; ?></td>
			        <td><?= $km[0]['penyelesaian_p'][$i];?><br></td>
			        <td></td>
			        <td></td>
			        <td></td>
			        <td></td>
			        <td></td>
		    	</tr>
    		<?php }?>
    		<tr>
		        <td ></td>
		        <td style="text-align: right;">Jumlah HP<br></td>
		        <td ></td>
		        <td ></td>
		        <td ></td>
		        <td ></td>
		        <td ></td>
		    </tr>
		</table>
	</div>
	<br><br>

	<div class="row">
		<div class="column0"></div>
	  	<div class="column"></div>
		<div class="column2"></div>
		<div class="column3">Surabaya, <?= date('d-m-Y')?></div>
	</div> 
	<div class="row">
		<div class="column0"></div>
		<div class="column"><center>Pengendali Teknis</center></div>
		<div class="column2"></div>
		<div class="column"><center>Ketua Tim</center></div>
		<div class="column0"></div>
	</div> 
	<br><br><br><br><br>
	<div class="row">
		<div class="column0"></div>
	  	<div class="column"><u><?= $km[0]['pengendali_teknis']?></u></div>
		<div class="column2"></div>
		<div class="column3"><u><?= $km[0]['ketua_tim']?></u></div>
	</div> 
	<div class="row">
		<div class="column0"></div>
	  	<div class="column">NIP.32232323235</div>
		<div class="column2"></div>
		<div class="column3">NIP.23232323232</div>
	</div> 

</body>
</html>