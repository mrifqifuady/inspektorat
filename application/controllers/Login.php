<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("usersmodel");
	}

	public function index()
	{
		$user = $this->session->userdata('user');	
		if (empty($user)) {
			$this->load->view('login');
		}else{
			$this->cekSession($user['username'],$user['password'],$user['level']);
		}
	}

	public function cek()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$process =$this->usersmodel->login($username,$password);
		if (!empty($process)) {
			$session = array( 
				'username'	=> $username, 
				'password'	=> $password,
				'nama_user' => $process[0]['nama'],
				'iduser'		=> $process[0]['_id'],
				'level'			=> $process[0]['level']
			);  

			$this->session->set_userdata(array('user'=>$session));
			if ($process[0]['level']=="superuser") {
				redirect('welcome','refresh');
			}elseif ($process[0]['level']=="admin") {
				redirect('spt','refresh');
			}elseif ($process[0]['level']=="user") {
				redirect('kkaAndKM9','refresh');
			}else{
				$this->load->view('login');
			}
		} else {
			$this->session->set_flashdata('notif','Login Gagal ');
			$this->load->view('login');
		}
		
	}

	public function cekSession($username,$password,$level)
	{
		$process =$this->usersmodel->login($username,$password);
		if (!empty($process)) {
			if ($level != $process[0]['level']) {
				$this->session->set_userdata(array('user'=>array('level',$level)));
	
			}
			if ($process[0]['level'] == "superuser") {
				redirect('welcome','refresh');
			}elseif ($process[0]['level']=="admin") {
				redirect('spt','refresh');
			}elseif ($process[0]['level']=="user") {
				redirect('kkaAndKM9','refresh');
			}else{
				$this->load->view('login');
			}
		} else {
			$this->load->view('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user');
		redirect('login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */