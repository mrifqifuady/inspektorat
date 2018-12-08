<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model("sptmodel");
		$this->load->model("peranmodel");
	}

	public function pdfSPT()
	{
        $pdf = new FPDF('p','mm',array(210,330));
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        // $pdf->SetFont('Arial','B',16);
        // mencetak string 
        // $image_format = strtolower(base_url('assets/images/template.jpg'), PATHINFO_EXTENSION);
        $pdf->Image(base_url('assets/images/template.png'),false, false,210);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,30,'',0,1);
        $pdf->SetFont('Arial','B',12);
        $pdf->WriteHTML("")
        $pdf->Cell(0, 6, "SURAT PERINTAH TUGAS", 0, 0, 'C');
        $pdf->Ln();
        $pdf->Cell(0, -6, "_______________________", 0, 0, 'C');
        $pdf->SetFont('Arial','',12);
        
        $id =$this->uri->segment(3);
        $data = $this->sptmodel->getSpt($id);
        $pdf->Ln();
        $pdf->Cell(0, 15, "NOMOR : ".$data[0]['no_surat'], 0, 0, 'C');
        $pdf->Ln();
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(20,6,'Dasar :',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(10,6,'1.',0,0);
        $pdf->Multicell(140,6,'Peraturan Daerah Profinsi Jawa Timur Nomor 11 Tahun 2016 tentang Pembentukan dan Susunan Peragkat Daerah.',0,'FJ');
        
        $pdf->Cell(20,6,'',0,0);
        $pdf->Cell(10,6,'2.',0,0);
        $pdf->Multicell(140,6,'Peraturan Gubernur Jawa Timur 60 Tahun 2016 tentang Kependudukan Susunan Organisasi. Uraian Tugas dan fungsi serta Tata Kerja Inspektorat Provinsi Jawa Timur',0,'FJ');

        $pdf->Cell(20,6,'',0,0);
        $pdf->Cell(10,6,'3.',0,0);
        $pdf->Multicell(140,6,'Dokumen Pelaksanaan Anggaran Inspektorat Provinsi Jawa Timur Tahun 2017 tanggal 27 Desember 2016 Nomor: 914/477/213.2/2016.',0,'FJ');
        $pdf->Ln();
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(0,6,'Gubernur Jawa Timur Menugaskan: ',0,0);
        $pdf->Ln();
        $pdf->Cell(20,8,'No.',1,0,'C');
        $pdf->Cell(90,8,'NAMA',1,0,'C');
        $pdf->Cell(70,8,'PERAN',1,0,'C');
        $pdf->SetFont('Arial','',11);
        $pdf->Ln();
        $no=1;
        //belum fix
        $itemData = $data[0]['data_peran'];
        $dataNama = $itemData['nama'];
        $dataPeran = $itemData['peran'];
        
        for ($i=0; $i < count($dataNama); $i++) {
                $pdf->Cell(20,8,$no++,1,0);
                $pdf->Cell(90,8,$dataNama[$i],1,0);
                $pdf->Cell(70,8,$dataPeran[$i],1,0,'C');
                $pdf->Ln();
        }

        $pdf->Ln();
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(30,6,'Untuk :',0,0);
        $pdf->SetFont('Arial','',11);
        $pdf->Multicell(140,6,'Melaksanakan Evaluasi Kelengkapan Pertanggungjawaban SPJ Juni s.d Juli Tahun pada UPT. Perlindungan dan Pelayanan Sosial Anak Trenggalek, Dinas Sosial Provinsi Jawa Timur.',0,'FJ');

        $pdf->Cell(30,9,'',0,0);
        $pdf->Multicell(140,6,'Waktu pelaksanaan mulai '.$data[0]['waktu_awal'].' s.d '.$data[0]['waktu_akhir'],0,'FJ');

        $pdf->Cell(30,9,'',0,0);
        $pdf->Multicell(140,6,'Kepada pihak-pihak yang berksangkutan diminta kesediaannya untuk memberikan bantukan data serta keterangan yang diperlukan guna kelancaran dan penyelesaian tugas dimaksud',0,'FJ');

        $pdf->Cell(30,9,'',0,0);
        $pdf->Multicell(140,6,'Seluruh biaya kegiatan dibebankan pada DPA Inspektorat Provinsi Jawa Timur Tahun 2017',0,'FJ');

        $pdf->Ln();
        $pdf->Cell(120,6,'',0,0);        
        $pdf->MultiCell(50,6,'Dikeluarkan di: Sidoarjo',0);
        date_default_timezone_set("Asia/Jakarta");
        $pdf->Cell(120,6,'',0,0);  
        $pdf->MultiCell(50,6,'Pada tanggal:'.date("Y-m-d"),0);
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(120,6,'',0,0);  
        $pdf->MultiCell(80,6,'a.n. GUBERNUR JAWA TIMUR',0,'L');
        $pdf->Cell(120,6,'',0,0);  
        $pdf->MultiCell(40,6,'Inspektur Provinsi',0,'C');
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(120,6,'',0,0);  
        $pdf->MultiCell(50,6,'gubernur',0);
        $pdf->Cell(120,6,'',0,0);  
        $pdf->MultiCell(50,6,'Pembina Utama Madya',0);
        $pdf->Cell(120,6,'',0,0); 
        $pdf->MultiCell(80,6,'NIP. 00',0);

        function Footer()
        {
        // Go to 1.5 cm from bottom
        $this->SetY(-15);
        // Select Arial italic 8
        $this->SetFont('Arial','I',8);
        // Print centered page number
        $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

        $pdf->Output();
	}

}

/* End of file export.php */
/* Location: ./application/controllers/export.php */