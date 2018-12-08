<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExportDom extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model("kmmodel");
		$this->load->model("kkamodel");
	}

	public function pdfKm9()
	{
		
		// $this->load->view('pdf/km9',$dataView,false);
		$paper_size = array(0,0,612.00,936.00);
		$id =$this->uri->segment(3);
		$dataView['km'] = $this->kmmodel->getKm($id);
		$html_content = $this->load->view('pdf/km',$dataView,true);
		$this->pdf->loadHtml($html_content);
		$this->pdf->setPaper($paper_size, 'portrait');
		$this->pdf->render();
		$this->pdf->stream("KM9.pdf",array("Attachment"=>0));
	}

	public function pdfkka()
	{
		$id =$this->uri->segment(3);
		$dataView['kka'] = $this->kkamodel->getkka($id);
		if (!empty($dataView['kka'])) {
			$html_content = $this->load->view('pdf/kka',$dataView,true);
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("KKA.pdf",array("Attachment"=>0));
		}else{
			// "fail";
		}
	}

}

/* End of file ExportDom.php */
/* Location: ./application/controllers/ExportDom.php */