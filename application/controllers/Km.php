<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Km extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model("kmmodel");
		
		$this->data['header'] = $this->load->view("header", null,true);
		if (!is_logged_in()) {
			redirect('login','refresh');
		}

	}

	public function index() {	
		$this->data['km'] = $this->kmmodel->viewKm();
		$this->load->view('km', $this->data);
	}

	public function insertkm() {
		$this->load->view('insertkm', $this->data);
	}

	public function insertProcess() {

		$this->kmmodel->insertkm();
		$this->session->set_flashdata('notif','successfully insert new data');
		redirect('km','refresh');

	}

	public function editkm() {

		$id =$this->uri->segment(3);
		$this->data['km'] = $this->kmmodel->getKm($id);
		
		

		$this->load->view('editkm',$this->data);
		

	}

	public function editkmProcess($id) {

	
		$process = $this->kmmodel->editProcess($id);
		if ($process) {
			$this->session->set_flashdata('notif','successfully edited');
			redirect('km');
		} else {
			$this->session->set_flashdata('notif','failed edited');
			redirect('km');
		}


	}

	public function deletekm($id) {
		$this->kmmodel->deletekm($id);
		$this->session->set_flashdata('notif','successfully delete');
		redirect('km','refresh');

	}


}
