<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KkaAndKM9 extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("kkamodel");
		$this->load->model("kmmodel");
		$this->load->model("sptmodel");
		$header['level'] = is_level();
		$this->data['header'] = $this->load->view("header", $header,true);
		if (!is_logged_in()) {
			redirect('login','refresh');
		}
		
	}

	public function index()
	{
		$this->data['nama'] = is_nama();
		$this->data['spt'] = $this->sptmodel->getSptByIdUser(is_id());
		$this->data['km9'] = $this->kmmodel->viewKm();
		$this->data['kka'] = $this->kkamodel->viewkka();
		// $this->data['checkData'] = $this->sptmodel->checkSptByKkaAndKm(is_id());
		$this->load->view('kkaandkm9/kka_viewspt', $this->data);
	}

	public function getKkaBySpt()
	{
		$id = $this->uri->segment(3);
		if (!empty($id)) {
			$this->data['kka'] = $this->kkamodel->viewKkaBySpt($id);
			$this->session->set_flashdata('notif'/*,json_encode($this->data['kka'])*/);
			if (empty($this->data['kka'])) {
				// $this->session->set_flashdata('notif','KKA tidak ditemukan');
				redirect('kkaAndKM9','refresh');
			}else{
				$this->load->view('kkaandkm9/kka_viewbyspt', $this->data);
			}
			
		}else{
			$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
			redirect('kkaAndKM9','refresh');
		}
	}

	public function getKm9BySpt()
	{
		$id = $this->uri->segment(3);
		if (!empty($id)) {
			$this->data['km9'] = $this->kmmodel->viewKmBySpt($id);
			if (empty($this->data['km9'])) {
				$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
				redirect('kkaAndKM9','refresh');
			}else{
				$this->load->view('kkaandkm9/kka_viewbyspt', $this->data);
			}
		}else{
			$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
			redirect('kkaAndKM9','refresh');
		}
	}

	public function insertKkaBySpt()
	{
		$this->load->view('kkaandkm9/kka_insertKka', $this->data);
	}

	public function insertKm9BySpt()
	{
		$this->data['nama'] = is_nama();
		$this->load->view('kkaandkm9/km_insertKm', $this->data);
	}

	public function updateKm9BySpt()
	{
		$id =$this->uri->segment(3);
		$this->data['km'] = $this->kmmodel->getKmBySpt($id);
		if (empty($this->data['km'])) {
			$this->session->set_flashdata('notif','KM9 tidak ditemukan');
			redirect('kkaAndKM9','refresh');
		}else{
			$this->load->view('kkaAndKM9/km_vieweditkm',$this->data);
		}
		
	}


	public function updateKkaBySpt()
	{
		$id = $this->uri->segment(3);
		if (empty($id)) {
			$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
			redirect('kkaAndKM9','refresh');
		}else{
			$this->data['kka'] = $this->kkamodel->getkka($id);
			if (empty($this->data['kka'])) {
				$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
				redirect('kkaAndKM9','refresh');
			}else{
				$this->load->view('kkaandkm9/kka_vieweditkka',$this->data);
			}
		}
		
	}

	public function insertKkaProcess()
	{
		$insert = $this->kkamodel->insertkka(is_id());
		if ($insert == "sptnull") {
			$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
			redirect('kkaandkm9','refresh');
		}elseif ($insert == "userexist") {
			$this->session->set_flashdata('notif','Tidak bisa menambah data');
			$id = $this->input->post('idSpt');
			redirect('kkaandkm9','refresh');
		}elseif ($insert == "success") {
			$this->session->set_flashdata('notif','successfully insert new data');
			$id = $this->input->post('idSpt');
			redirect('kkaandkm9','refresh');
		}else{
			$this->session->set_flashdata('notif',json_encode($insert));
			redirect('kkaandkm9','refresh');
		}
		
	}

	public function insertKmProcess()
	{
		$insert = $this->kmmodel->insertKm();
		if ($insert == null) {
			$this->session->set_flashdata('notif','Id SPT tidak ditemukan');
			redirect('kkaandkm9','refresh');
		}elseif ($insert == "exist") {
			$this->session->set_flashdata('notif','tidak bisa menambah lebih dari 1 KM9');
			redirect('kkaandkm9','refresh');
		} elseif (!$insert) {
			$this->session->set_flashdata('notif','failed inset data');
			redirect('kkaandkm9','refresh');
		}else{
			$this->session->set_flashdata('notif','successfully insert new data');
			redirect('kkaandkm9','refresh');
		}
	}

	public function updateKmProcess()
	{
		$update = $this->kmmodel->updateKm();
		if ($update == null) {
			$this->session->set_flashdata('notif','KM9 tidak ditemukan');
			redirect('kkaandkm9','refresh');
		}elseif (!$update) {
			$this->session->set_flashdata('notif','failed inset data');
			redirect('kkaandkm9','refresh');
		}else{
			$this->session->set_flashdata('notif','successfully insert new data');
			redirect('kkaandkm9','refresh');
		}
	}

	public function editKkaProcess()
	{
		$id =$this->uri->segment(3);
		$input = array(
			'_id'=>new MongoId(is_id()),
			'name'=>is_nama()
		);
		$process = $this->kkamodel->editkka($id,$input);
		if ($process) {
			$this->session->set_flashdata('notif','successfully edited');
			redirect('kkaAndKM9');
		} else {
			$this->session->set_flashdata('notif','failed edited');
			redirect('kkaAndKM9');
		}
	}

}

/* End of file KkaAndKM9.php */
/* Location: ./application/controllers/KkaAndKM9.php */