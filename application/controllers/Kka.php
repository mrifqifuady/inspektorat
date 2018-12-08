<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kka extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("kkamodel");
		$this->data['header'] = $this->load->view("header", null,true);
		if (!is_logged_in()) {
			redirect('login','refresh');
		}
	}

	public function index()
	{
		//sementara
		$this->data['spt'] = $this->kkamodel->viewSpt();
		$this->load->view('kkaandkm9/kka_viewspt', $this->data);
	}

	public function getKkaBySpt()
	{
		$id = $this->uri->segment(3);
		if (!empty($id)) {
			$this->data['kka'] = $this->kkamodel->viewKkaBySpt($id);
			if (empty($this->data['kka'])) {
				$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
				redirect('kka','refresh');
			}else{
				$this->load->view('kkaandkm9/kka_viewbyspt', $this->data);
			}
			
		}else{
			$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
			redirect('kka','refresh');
		}
	}

	public function getKm9BySpt()
	{
		if (!empty($id)) {
			$this->data['km9'] = $this->kmmodel->viewKmBySpt($id);
			if (empty($this->data['km9'])) {
				$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
				redirect('kka','refresh');
			}else{
				$this->load->view('kkaandkm9/kka_viewbyspt', $this->data);
			}
		}else{
			$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
			redirect('kka','refresh');
		}
	}

	public function insertKka()
	{
		$this->load->view('kkaandkm9/kka_insertKka', $this->data);
	}

	public function editKka()
	{
		$id = $this->uri->segment(3);
		if (empty($id)) {
			$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
			redirect('kka','refresh');
		}else{
			$this->data['kka'] = $this->kkamodel->getkka($id);
			if (empty($this->data['kka'])) {
				$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
				redirect('kka','refresh');
			}else{
				$this->load->view('kkaandkm9/kka_vieweditkka',$this->data);
			}
		}
		
	}

	public function insertKkaProcess()
	{
		$insert = $this->kkamodel->insertkka();
		if ($insert == "sptnull") {
			$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
			redirect('kkaandkm9/insertKka','refresh');
		}elseif ($insert == "success") {
			$this->session->set_flashdata('notif','successfully insert new data');

			$id = $this->input->post('idSpt');
			$this->data['kka'] = $this->kkamodel->viewKkaBySpt($id);
			$this->load->view('kkaandkm9/kka_viewbyspt', $this->data);
		}else{
			$this->session->set_flashdata('notif',json_encode($insert));
			redirect('kkaandkm9/insertKka','refresh');
		}
		
	}

	public function editKkaProcess()
	{
		$id =$this->uri->segment(3);
		$process = $this->kkamodel->editkka($id);
		if ($process) {
			$this->session->set_flashdata('notif','successfully edited');
			redirect('kka');
		} else {
			$this->session->set_flashdata('notif','failed edited');
			redirect('kka');
		}
	}

}

/* End of file Kka.php */
/* Location: ./application/controllers/Kka.php */