<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spt extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model("sptmodel");
		$this->load->model("peranmodel");
		$this->load->model("usersmodel");
		$header['level'] = is_level();
		$this->data['header'] = $this->load->view("header", $header,true);
		if (!is_logged_in()) {
			redirect('login','refresh');
		}elseif (is_level()!="superuser" && is_level()!="admin") {
			$this->session->set_flashdata('notif','tidak di ijinkan mengakses fitur');
			redirect('welcome','refresh');
		}
	}

	public function index() {
		$this->data['spt'] = $this->sptmodel->viewSpt();
		$this->load->view('spt', $this->data);
	}

	public function insertSpt() {
		$this->data['user'] = $this->usersmodel->viewUsers();
		$this->data['peran'] = $this->peranmodel->viewperan();
		$this->load->view('insertspt',$this->data);
	}

	public function insertProcess() {
		if ($this->sptmodel->insertspt()) {
			$this->session->set_flashdata('notif','successfully insert new data');
		}else{
			$this->session->set_flashdata('notif','failed insert new data');
		}
		
		redirect('spt','refresh');

	}

	public function editSpt() {

		$id =$this->uri->segment(3);
		$this->data['spt'] = $this->sptmodel->getSpt($id);
		$this->data['user'] = $this->usersmodel->viewUsers();
		$this->data['peran'] = $this->peranmodel->viewperan();
		if (is_null($this->data['spt'])) {
			$this->load->view('errors/html/error_404');
		}else{
			$this->load->view('editspt',$this->data);
		}
		

	}

	public function editSptProcess($id) {

	
		$process = $this->sptmodel->editProcess($id);
		if ($process) {
			$this->session->set_flashdata('notif','successfully edited');
			redirect('spt');
		} else {
			# code...
		}


	}

	public function deleteSpt($id) {

		$this->sptmodel->deleteSpt($id);
		$this->session->set_flashdata('notif','successfully delete');
		redirect('spt','refresh');

	}


}
