<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peran extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("peranmodel");
		$header['level'] = is_level();
		$this->data['header'] = $this->load->view("header", $header,true);
		if (!is_logged_in()) {
			redirect('login','refresh');
		}elseif (is_level()!="superuser") {
			redirect('login','refresh');
		}

	}

	public function index() {	
		
		$this->data['peran'] = $this->peranmodel->viewPeran();
		$this->load->view('peran', $this->data);
	}

	public function insertPeran() {
		$this->load->view('insertperan', $this->data);
	}

	public function insertProcess() {

		$this->peranmodel->insertperan();
		$this->session->set_flashdata('notif','successfully insert new data');
		redirect('peran','refresh');

	}

	public function editPeran() {

		$id =$this->uri->segment(3);
		$this->data['peran'] = $this->peranmodel->getPeran($id);
		
		

		$this->load->view('editperan',$this->data);
		

	}

	public function editPeranProcess($id) {

	
		$process = $this->peranmodel->editProcess($id);
		if ($process) {
			$this->session->set_flashdata('notif','successfully edited');
			redirect('peran');
		} else {
			# code...
		}


	}

	public function deletePeran($id) {

		$this->peranmodel->deletePeran($id);
		$this->session->set_flashdata('notif','successfully delete');
		redirect('peran','refresh');

	}


}
