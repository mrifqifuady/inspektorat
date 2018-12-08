<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peranmodel extends CI_Model {

	function insertperan() {

		$data = array(
					
					'peran' 	=> $this->input->post('peran')
					
					);

		$this->mongo_db->insert('peran', $data);
		return true; 

	}

	function editProcess($id) {

		

		$data = array(

				
				'peran' 	=> $this->input->post('peran')
				
			);
		// print_r($data);
		// exit();

		// $this->mongo_db->where(array('_id' => new mongoId($id)));
		// return $this->mongo_db->update('users', $data);
		
		return $this->mongo_db->where(array('_id'=>new mongoId($id)))->set($data)->update('peran');

	} 

	function viewperan() {
		return $this->mongo_db->get('peran');

	}

	function getperan($id) {

		return $this->mongo_db->where(array('_id' => new mongoId($id)))->get('peran');
		
	}

	function deleteperan($id) {

		return $this->mongo_db->where(array('_id' => new mongoId($id)))->delete('peran');
	}
	

}

/* End of file usersmodel.php */
/* Location: ./application/models/usersmodel.php */