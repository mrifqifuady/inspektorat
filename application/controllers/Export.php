<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf_generator');
		$this->load->model("sptmodel");
		$this->load->model("peranmodel");
	}

	public function pdfSPT()
	{
		$id =$this->uri->segment(3);
		$data['data'] = $this->sptmodel->getSpt($id);
		$this->load->view('pdf/spt', $data, FALSE);	

	}

}

/* End of file Export.php */
/* Location: ./application/controllers/Export.php */