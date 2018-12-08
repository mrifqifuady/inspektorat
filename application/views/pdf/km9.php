<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<style type="text/css">
		.column {
    float: left;
    width: 33.33%;
}
.table{
	width: 100%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
	</style>
</head>

<body>
<header>
	<center>
		<img src="<?= $_SERVER['DOCUMENT_ROOT'].'/inspek/assets/header.PNG' ?>" width="100%" >
	</center>
</header>
<font size = "4">
<br><br>
	<table>
		<tr>
			<td width="5%"></td>
			<td width="20%">Nama </td>
			<td width="5%"> </td>
			<td width="70%"> <?= $km[0]['nama_objek']?></td>
		</tr>
		<tr>
			<td width="5%"></td>
			<td width="20%">Alamat </td>
			<td width="5%"> </td>
			<td width="70%"> <?= $km[0]['alamat']?></td>
		</tr>
		<tr>
			<td width="5%"></td>
			<td width="20%">Sasaran  </td>
			<td width="5%"> </td>
			<td width="70%"> <?= $km[0]['sasaran']?></td>
		</tr>
		<tr>
			<td width="5%"></td>
			<td width="20%">Tahun  </td>
			<td width="5%"> </td>
			<td width="70%"> <?= $km[0]['tahun']?></td>
		</tr>
</table>
<center>
	<strong>PROGRAM PERSIAPAN</strong>
</center>
<table style="border: 1px solid black;border-collapse: collapse;">
	
    <tr>
        <td colspan="2" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: center;"><b>uraian,tujuan dan</b></td>
        <td colspan="2" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: center;  "><b>rencana</b></td>
        <td colspan="2" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: center;  "><b>realisasi</b></td>
        <td rowspan="3" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: center;  "><b>ref kke</b><br></td>
    </tr>
    <tr>
        <td colspan="2" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: center;  "><b>prosedur pemeriksaan</b></td>
        <td rowspan="2" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: center;  "><b>dilak<br>oleh</b></td>
        <td rowspan="2" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: center;  "><b>angg <br>waktu</b></td>
        <td rowspan="2" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: center;  "><b>dilak<br>oleh</b></td>
        <td rowspan="2" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: center;  "><b>angg <br>waktu</b></td>
    </tr>
    <tr>
        <td colspan="2" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: center;  "></td>
    </tr>
    <tr>
        <th width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
        <th width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  ">Tujuan</th>
        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
        <th></th>
    </tr>
    <tr>
        <td width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
        <td width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "><?= $km[0]['pemerikasaan_t'];?><br></td>
        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  " ></td>
        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
    </tr>
    <tr>
        <th width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
        <th width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  ">Prosedur</th>
        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
        <th></th>
    </tr>
    <?php 
    	$pemeriksaan = "";
    	for ($i=0; $i < count($km[0]['pemeriksaan_p']); $i++) { ?>
    		<tr>
		        <td width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "><?= $km[0]['pemeriksaan_p'][$i];?><br></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  " ></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		    </tr>
    	<?php }?>
    		<tr>
		        <td width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: right;  ">Jumlah HP<br></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  " ></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		    </tr>
		    <tr>
		    	<th colspan="7" style="border-collapse: collapse;padding: 1%;text-align: center;  "> PROGRAM PELAKSANAAN</th>
		    </tr>
		    <tr>
		        <th width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  ">Tujuan</th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		    </tr>
		    <tr>
		        <td width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "><?= $km[0]['pelaksanaan_t'];?><br></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  " ></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		    </tr>
		    <tr>
		        <th width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  ">Prosedur</th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
    </tr>
    <?php 
    	$pelaksanaan = "";
    	for ($i=0; $i < count($km[0]['pelaksanaan_p']); $i++) { ?>
    		<tr>
		        <td width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "><?= $km[0]['pelaksanaan_p'][$i];?><br></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  " ></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		    </tr>
    	<?php }?>
    		<tr>
		        <td width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: right;  ">Jumlah HP<br></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  " ></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		    </tr>
		    <tr>
		    	<th colspan="7" style="border-collapse: collapse;padding: 1%;text-align: center;  "> PROGRAM PENYELESAIAN</th>
		    </tr>
		    <tr>
		        <th width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  ">Tujuan</th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		    </tr>
		    <tr>
		        <td width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "><?= $km[0]['penyelesaian_t'];?><br></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  " ></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		    </tr>
		    <tr>
		        <th width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  ">Prosedur</th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
		        <th width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></th>
    </tr>
    <?php 
    	$penyelesaiaan = "";
    	for ($i=0; $i < count($km[0]['penyelesaian_p']); $i++) { ?>
    		<tr>
		        <td width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "><?= $km[0]['penyelesaian_p'][$i];?><br></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  " ></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		    </tr>
    	<?php }?>
    		<tr>
		        <td width="1%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="40%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: right;  ">Jumlah HP<br></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  " ></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		        <td width="10%" style="border: 1px solid black;border-collapse: collapse;padding: 1%;text-align: left;  "></td>
		    </tr>
		    <?php date_default_timezone_set("Asia/Jakarta");?>
</table>
<br>

 <div class="row">
  <div class="column"></div>
  <div class="column"></div>
  <div class="column">Surabaya,<?= date('d-m-Y')?></div>
</div> 
<div class="row">
  <div class="column">Pengendali Teknis</div>
  <div class="column"></div>
  <div class="column">Ketua Tim</div>
</div> 
<br>
<br>
<br>
<br>
<br>







<div class="row">
  
  <div class="column"><u><?= $km[0]['pengendali_teknis']?></u></div>
  <div class="column"></div>
  <div class="column"><u><?= $km[0]['ketua_tim']?></u></div>
</div> 
<div class="row">
  <div class="column">NIP.32232323235 </div>
  <div class="column"></div>
  <div class="column">NIP.23232323232</div>
</div> 


		    
		    
    
    

</font>
</body>

</html>
