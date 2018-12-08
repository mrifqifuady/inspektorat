<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model("usersmodel");
		$header['level'] = is_level();
		$this->data['header'] = $this->load->view("header", $header,true);
		if (!is_logged_in()) {
			redirect('login','refresh');
		}
	}

	public function index() {	
		$this->data['user'] = $this->usersmodel->viewAllUsers();
		$this->load->view('welcome_message', $this->data);
		
	}

	public function insertUser() {
		$this->load->view('insertusers', $this->data);
		
	}

	public function insertProcess() {
		$this->usersmodel->insertusers();
		$this->session->set_flashdata('notif','successfully insert new data');
		redirect('welcome','refresh');
	}

	public function editUser() {
		
		$id =$this->uri->segment(3);
		$this->data['user'] = $this->usersmodel->getUsers($id);
		$this->load->view('editusers',$this->data);
		

	}

	public function editSuperUser()
	{
		if (is_level()=="superuser") {
			$id =$this->uri->segment(3);
			$this->data['user'] = $this->usersmodel->getUsers($id);
			if (empty($id)) {
				$this->session->set_flashdata('notif','Id tidak ditemukan');
				redirect('welcome','refresh');
			}else{
				if(empty($this->data['user'])){
					$this->session->set_flashdata('notif','Id Tidak Valid');
					redirect('welcome','refresh');
				}else{
					$this->load->view('admin_viewEdit',$this->data);
				}
			}
		}else{
			$this->session->set_flashdata('notif','akses tidak diijinkan');
			redirect('welcome','refresh');
		}
		
	}

	public function editUserProcess() {
		$id =$this->uri->segment(3);
		if (empty($id)) {
			$this->session->set_flashdata('notif','Id is empty');
			redirect('login');
		}else{
			$process = $this->usersmodel->editProcess($id);
			if ($process) {
				$this->session->set_flashdata('notif','successfully edited');
				redirect('login');
			} else {
				# code...
			}
		}
		
	}

	public function editSuperProcess() {
		$id =$this->uri->segment(3);
		if (is_level()=='superuser') {
			$process = $this->usersmodel->editSuperProcess($id);
			if ($process) {
				$this->session->set_flashdata('notif',json_encode($process));
				redirect('welcome');
			} else {
				# code...
			}
		}else{
			$this->session->set_flashdata('notif','akses tidak diijinkan');
			redirect('welcome','refresh');
		}
	}




	public function deleteUser($id) {
		if (is_logged_in()) {
			$this->usersmodel->deleteUser($id);
			$this->session->set_flashdata('notif','successfully delete');
			redirect('welcome','refresh');
		}else{
			redirect('login');
		}
	}









}
