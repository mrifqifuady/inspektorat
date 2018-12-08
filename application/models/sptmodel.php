<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sptmodel extends CI_Model {

	function insertSpt() {
		$dataperan['nama'] = $this->input->post('nama');
		$dataperan['peran'] = $this->input->post('peran');
		for ($i=0; $i < count($dataperan['nama']); $i++) { 
			list($namaId, $namaValue) = explode("-*-", $dataperan['nama'][$i], 2);
			list($peranId, $peranValue) = explode("-*-", $dataperan['peran'][$i],2);
			$insertPeran[] = array(
				'_id'=> new MongoId($namaId),
				'name' => $namaValue,
				'role' => array(
					'_id' => new MongoId($peranId),
					'name'=>$peranValue
					),
			);
		}

		$data = array(
					'no_surat' 	=> $this->input->post('no_surat'),
					'dasar' 	=> $this->input->post('dasar'),
					'users' => $insertPeran,
					'tugas' 	=> $this->input->post('tugas'),
					'waktu_awal' 	=> $this->input->post('waktu_awal'),
					'waktu_akhir' 	=> $this->input->post('waktu_akhir'),
					'gubernur' 	=> $this->input->post('gubernur')
					);

		$this->mongo_db->insert('spt', $data);
		return true; 

	}

	function editProcess($id) {
		$dataperan['nama'] = $this->input->post('nama');
		$dataperan['peran'] = $this->input->post('peran');
		for ($i=0; $i < count($dataperan); $i++) { 
			list($namaId, $namaValue) = explode("-*-", $dataperan['nama'][$i], 2);
			list($peranId, $peranValue) = explode("-*-", $dataperan['peran'][$i],2);
			$insertPeran[] = array(
				'_id'=> new MongoId($namaId),
				'name' => $namaValue,
				'role' => array(
					'_id' => new MongoId($peranId),
					'name'=>$peranValue
					),
			);
		}

		$data = array(
				'no_surat' 	=> $this->input->post('no_surat'),
				'dasar' 	=> $this->input->post('dasar'),
				'users' => $insertPeran,
				'tugas' 	=> $this->input->post('tugas'),
				'waktu_awal' 	=> $this->input->post('waktu_awal'),
				'waktu_akhir' 	=> $this->input->post('waktu_akhir'),
				'gubernur' 	=> $this->input->post('gubernur')
			);
		// print_r($data);
		// exit();

		// $this->mongo_db->where(array('_id' => new mongoId($id)));
		// return $this->mongo_db->update('users', $data);
		
		return $this->mongo_db->where(array('_id'=>new mongoId($id)))->set($data)->update('spt');

	} 

	function viewSpt() {

		return $this->mongo_db->get('spt');

	}

	function getSpt($id) {

		return $this->mongo_db->where(array('_id' => new mongoId($id)))->get('spt');
		
	}

	function deleteSpt($id) {

		return $this->mongo_db->where(array('_id' => new mongoId($id)))->delete('spt');
	}

	function getSptByIdUser($id_user)
	{
		return $this->mongo_db->where(array('users._id' => new mongoId($id_user)))->get('spt');
	}
	

}

/* End of file usersmodel.php */
/* Location: ./application/models/usersmodel.php */