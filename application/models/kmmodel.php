<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kmmodel extends CI_Model {

	function insertkm() {
		$spt = $this->mongo_db->where(array('_id' => new mongoId($this->input->post('spt_id'))))->get('spt');
		if (empty($spt[0]['_id'])) {
			return $spt;
		}else{
			$kmcheck = $this->mongo_db->where(
				array(
					'spt._id' => new mongoId($this->input->post('spt_id')),'ketua_tim' => $this->input->post('ketua_tim')))->get('km');
			if (!empty($kmcheck[0]['_id'])) {
				return "exist";
			}else{
				$data = array(
					'nama_objek' 	=> $this->input->post('nama_objek'),
					'alamat' 	=> $this->input->post('alamat'),
					'sasaran' 	=> $this->input->post('sasaran'),
					'tahun' 	=> $this->input->post('tahun'),
					'pemerikasaan_t' 	=> $this->input->post('persiapan_t'),
					'pemeriksaan_p' 	=> $this->input->post('persiapan_p'),
					'pelaksanaan_t' 	=> $this->input->post('pelaksanaan_t'),
					'pelaksanaan_p' 	=> $this->input->post('pelaksanaan_p'),
					'penyelesaian_t' 	=> $this->input->post('penyelesaian_t'),
					'penyelesaian_p' 	=> $this->input->post('penyelesaian_p'),
					'tanggal' 	=> $this->input->post('tanggal'),
					'pengendali_teknis' 	=> $this->input->post('pengendali_teknis'),
					'ketua_tim' 	=> $this->input->post('ketua_tim'),
					'spt' => array('_id'=>new MongoId($spt[0]['_id']))
				);
				return $this->mongo_db->insert('km', $data);

			}
		}
	}

	function updateKm() {
		$spt = $this->mongo_db->where(array('_id' => new mongoId($this->input->post('spt_id'))))->get('spt');
		if (empty($spt[0]['_id'])) {
			return $spt;
		}else{
			$data = array(
				'nama_objek' 	=> $this->input->post('nama_objek'),
				'alamat' 	=> $this->input->post('alamat'),
				'sasaran' 	=> $this->input->post('sasaran'),
				'tahun' 	=> $this->input->post('tahun'),
				'pemerikasaan_t' 	=> $this->input->post('persiapan_t'),
				'pemeriksaan_p' 	=> $this->input->post('persiapan_p'),
				'pelaksanaan_t' 	=> $this->input->post('pelaksanaan_t'),
				'pelaksanaan_p' 	=> $this->input->post('pelaksanaan_p'),
				'penyelesaian_t' 	=> $this->input->post('penyelesaian_t'),
				'penyelesaian_p' 	=> $this->input->post('penyelesaian_p'),
				'tanggal' 	=> $this->input->post('tanggal'),
				'pengendali_teknis' 	=> $this->input->post('pengendali_teknis'),
				'ketua_tim' 	=> $this->input->post('ketua_tim'),
				'spt' => array('_id'=>new MongoId($spt[0]['_id']))
			);
			return $this->mongo_db->where(array('spt._id'=>new mongoId($spt[0]['_id'])))->set($data)->update('km');
		}
	} 

	function viewkm() {
		return $this->mongo_db->get('km');

	}

	function getkmbyspt($id) {
		return $this->mongo_db->where(array('spt._id' => new mongoId($id)))->get('km');
	}

	function getkm($id) {
		return $this->mongo_db->where(array('_id' => new mongoId($id)))->get('km');
	}

	function deletekm($id) {

		return $this->mongo_db->where(array('_id' => new mongoId($id)))->delete('km');
	}

	function viewKmBySpt($id)
	{
		return $this->mongo_db->where(array('_id' => new mongoId($id)))->get('km');
	}


}

/* End of file usersmodel.php */
/* Location: ./application/models/usersmodel.php */