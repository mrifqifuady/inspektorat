<?php

class MYPDF extends TCPDF {
    //Page header
    public function Header(){
    	$this->setJPEGQuality(90);
 		$this->Image(base_url('assets/headerNotUnderline.PNG'), 90, 5, 180, '', 'PNG', '', 'T', false, 300, 'C', false, false, 0, false, false, false);
	}

	public function WriteHtmlCell($cellWidth,$html)
	{
		$rm = $this->rMargin;
	    $this->SetRightMargin($this->w - $this->GetX() - $cellWidth);
	    $this->WriteHtml('<td>'.$html.'</td>');
	    $this->SetRightMargin($rm);
	}
}


$pdf = new MYPDF('P', 'mm', 'F4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator('Polinema');
$pdf->SetTitle('SPT');
$pdf->SetSubject('SPT File');

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(10);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);


// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
// ---------------------------------------------------------

// add a page
$pdf->AddPage();
// set cell padding
// $pdf->setCellPaddings(1, 1, 1, 1);
// set cell margins
// $pdf->setCellMargins(1, 1, 1, 1);
// set color for background
// $pdf->SetFillColor(255, 255, 127);


$pdf->Ln(3);
$pdf->SetFont('times', 'BU', 13);
$pdf->MultiCell(0, 1, "SURAT PERINTAH TUGAS", 0, 'C');
$pdf->SetFont('times', '', 12);
$pdf->MultiCell(0, 1, "NOMOR : ".$data[0]['no_surat'], 0, 'C');
$pdf->Ln();
$pdf->SetFont('times','B',12);
$pdf->SetXY(28, 43);
$pdf->Cell(10,0,'Dasar :',0,0);
$pdf->SetFont('times','J',12);
$pdf->WriteHtmlCell(140,$data[0]['dasar']);
        
$pdf->Ln(1);
$pdf->SetX(28);
$pdf->SetFont('times','B',12);
$pdf->Cell(0,6,'Gubernur Jawa Timur Menugaskan: ',0,0);
$pdf->Ln();
$pdf->SetX(28);
$pdf->Cell(10,8,'No.',1,0,'C');
$pdf->Cell(90,8,'NAMA',1,0,'C');
$pdf->Cell(60,8,'PERAN',1,0,'C');

$pdf->SetFont('times','',12);
$pdf->Ln();
$no=1;
//belum fix
        if (array_key_exists('users',$data[0]) && is_array($data[0]['users'])) {
        	$dataUser = $data[0]['users'];
        	for ($i=0; $i < count($dataUser); $i++) {
				$pdf->SetX(28);
                $pdf->Cell(10,2,$no++,1,0);
                $pdf->Cell(90,2,$dataUser[$i]['name'],1,0);
                $pdf->Cell(60,2,$dataUser[$i]['role']['name'],1,0,'C');
                $pdf->Ln();
            }
        }


// move pointer to last page
$pdf->lastPage();
$pdf->Ln();
        $pdf->SetFont('times','B',12);
        $pdf->SetX(28);
        $pdf->Cell(30,6,'Untuk :',0,0);
        $pdf->SetFont('times','',12);
        $pdf->WriteHtmlCell(130,$data[0]['tugas']);
        $pdf->Ln();
        $pdf->SetX(130);
        $pdf->MultiCell(50,6,'Dikeluarkan di : Sidoarjo',0);
        $pdf->SetX(130);
        date_default_timezone_set("Asia/Jakarta");
        $pdf->MultiCell(50,6,'Pada tanggal : '.date("d-m-Y"),0);
        $pdf->SetFont('times','BL',12);
        $pdf->SetX(130);
        $pdf->MultiCell(75,6,'a.n. GUBERNUR JAWA TIMUR',0,'L');
        $pdf->SetX(130);
        $pdf->MultiCell(75,6,'Inspektur Provinsi',0,'C');
        $pdf->Ln(4);
        $pdf->Ln(4);
        $pdf->Ln(4);
        $pdf->Ln(4);
        
        $pdf->SetFont('times', 'BU', 12);
        $pdf->SetX(130);
        $pdf->MultiCell(75, 1, $data[0]['gubernur'], 0);
        $pdf->SetX(130);
        $pdf->SetFont('times', 'B', 13);
        $pdf->MultiCell(75,1,'Pembina Utama Madya',0,'L');        
        $pdf->SetX(130);
        $pdf->MultiCell(75,1,'NIP. 00',0,'L');
//Close and output PDF document
ob_end_clean();
$pdf->Output('example_005.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+