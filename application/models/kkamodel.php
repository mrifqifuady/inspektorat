
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kkamodel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	function viewSpt() 
	{
		// return $this->mongo_db->get('kka');
		return $this->mongo_db->get('spt');

	}

	function viewKka() 
	{
		// return $this->mongo_db->get('kka');
		return $this->mongo_db->get('kka');

	}

	function viewKkaBySpt($id)
	{
		$spt = $this->mongo_db->where(array('_id' => new mongoId($id)))->get('spt');
		if (empty($spt[0]['_id']))
			return $spt;
		else
			return $this->mongo_db->where(array('spt._id' => new mongoId($spt[0]['_id'])))->get('kka');
	}

	function getkka($id)
	{
		return $this->mongo_db->where(array('_id' => new mongoId($id)))->get('kka');
	}

	function insertKka($iduser){
		$dataKKA['tittle'] = $this->input->post('tittle');
		$dataKKA['judul'] = $this->input->post('judul');
		$dataKKA['tahun'] = $this->input->post('tahun');
		$dataKKA['kondisi'] = $this->input->post('kondisi');
		$dataKKA['kriteria'] = $this->input->post('kriteria');
		$dataKKA['pembandingan'] = $this->input->post('pembandingan');
		$dataKKA['simpulan'] = $this->input->post('simpulan');


		$user = $this->mongo_db->where(array('users.name'=>$_SESSION['user']['nama_user']/*,'spt._id' => new mongoId($this->input->post('idSpt'))*/))->get('spt');
		if (!empty($user)) {
			for ($i=0; $i < count($dataKKA['tittle']); $i++) {
				$insertKka[] = array(
					'tittle' => $dataKKA['tittle'][$i],
					'judul' => $dataKKA['judul'][$i],
					'tahun' => $dataKKA['tahun'][$i],
					'kondisi' => $dataKKA['kondisi'][$i],
					'kriteria' => $dataKKA['kriteria'][$i],
					'pembandingan' => $dataKKA['pembandingan'][$i],
					'simpulan' => $dataKKA['simpulan'][$i]
				);
			}
			$spt = $this->mongo_db->where(array('_id' => new mongoId($this->input->post('idSpt'))))->get('spt');
			if (empty($spt[0]['_id'])) {
				return $spt;
		// }else if () {
		// 	return;
			}else{
				$data = array(
					'user' => array(
						'_id' => new MongoId($_SESSION['user']['iduser']),
						'name' => $_SESSION['user']['nama_user']
					),
					'spt' => array(
						'_id'=>new MongoId($spt[0]['_id']),
						'no_surat'=>$spt[0]['no_surat']
					),
					'datakka' => $insertKka
				);
				$insert = $this->mongo_db->insert('kka',$data);
				if ($insert) {				
					return "success";
				}else{
					return "failinsert";
				}
			}
		}else{
			return "userexist";
		}

	}

	function editkka($id,$userinput)
	{
		$dataKKA['tittle'] = $this->input->post('tittle');
		$dataKKA['judul'] = $this->input->post('judul');
		$dataKKA['tahun'] = $this->input->post('tahun');
		$dataKKA['kondisi'] = $this->input->post('kondisi');
		$dataKKA['kriteria'] = $this->input->post('kriteria');
		$dataKKA['pembandingan'] = $this->input->post('pembandingan');
		$dataKKA['simpulan'] = $this->input->post('simpulan');
		//$dataKKA['file'] = "file/".$_FILES['img']['name'];


		for ($i=0; $i < count($dataKKA['tittle']); $i++) {
			//move_uploaded_file($_FILES['img']['tmp_name'], "file/".$_FILES['img']['name']);
			$insertKka[] = array(
				'tittle' => $dataKKA['tittle'][$i],
				'judul' => $dataKKA['judul'][$i],
				'tahun' => $dataKKA['tahun'][$i],
				'kondisi' => $dataKKA['kondisi'][$i],
				'kriteria' => $dataKKA['kriteria'][$i],
				'pembandingan' => $dataKKA['pembandingan'][$i],
				'simpulan' => $dataKKA['simpulan'][$i]
				//'file' => $dataKKA['file'][$i]
			);
		}
		$spt = $this->mongo_db->where(array('_id' => new mongoId($id)))->get('kka');
		if (empty($spt[0]['_id'])) {
			return $spt;
		// }else if () {
		// 	return;
		}else{
			$data = array(
				'datakka' => $insertKka
			);
			$insertt = $this->mongo_db->where(array('_id'=>new mongoId($id)))->set($data)->update('kka');
			
			if ($insertt) {
				date_default_timezone_set('asia/jakarta');
				$history = array(
					'kka'=>array(
						'_id'=> new MongoId($id)),
					'user'=>$userinput,
					'time' =>date('Y-m-d h:i:s')
				);
				return $this->mongo_db->insert('history_kka',$history);
			}else{
				return $insertt;
			}
		}
	}
	function coba(){
		var_dump($_FILES['img']);
	}



}

/* End of file kkamodel.php */
/* Location: ./application/models/kkamodel.php */