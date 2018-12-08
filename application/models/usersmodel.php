<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usersmodel extends CI_Model {

	function insertUsers() {

		$data = array(
			'nama' 				=> $this->input->post('nama'), 
			'nip' 				=> $this->input->post('nip'),
			'pangkatgolongan'	=> $this->input->post('pangkatgolongan'),
			'jabatan'			=> $this->input->post('jabatan'),
			'username'			=> $this->input->post('username'),
			'password' 			=> $this->input->post('password'),
			'level' 			=> $this->input->post('level')
		);

		$this->mongo_db->insert('users', $data);
		return true; 

	}

	function editProcess($id) {		

		$data = array(

			'nama' 	=> $this->input->post('nama'), 
			'nip' 	=> $this->input->post('nip'),
			'pangkatgolongan'		=> $this->input->post('pangkatgolongan'),
			'jabatan'		=> $this->input->post('jabatan'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		// print_r($data);
		// exit();

		// $this->mongo_db->where(array('_id' => new mongoId($id)));
		// return $this->mongo_db->update('users', $data);
		
		return $this->mongo_db->where(array('_id'=>new mongoId($id)))->set($data)->update('users');

	} 

	function editSuperProcess($id) {		

		$data = array(
			'nama' 	=> "Super User", 
			'nip' 	=> "-",
			'pangkatgolongan'		=> "-",
			'jabatan'		=> "-",
			'username' 	=> $this->input->post('username'), 
			'password' 	=> $this->input->post('password'),
			'level' =>"superuser"
		);
		return $this->mongo_db->where(array('_id'=>new mongoId($id)))->set($data)->update('users');

	} 

	function viewUsers() {

		return $this->mongo_db->where(array('level'=>'user'))->get('users');

	}

	function viewAllUsers()
	{
		return $this->mongo_db->where_or(array('level'=>'user'))->where_or(array('level'=>'admin'))->get('users');
	}

	function getUsers($id) {

		return $this->mongo_db->where(array('_id' => new mongoId($id)))->get('users');
		
	}

	function deleteUser($id) {

		return $this->mongo_db->where(array('_id' => new mongoId($id)))->delete('users');
	}

	function login($username,$password){

		return $this->mongo_db->where(array('username' => $username,'password' => $password))->get('users');
	}
	

}

/* End of file usersmodel.php */
/* Location: ./application/models/usersmodel.php */