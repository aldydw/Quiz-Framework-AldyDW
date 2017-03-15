<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	public function index($id)
	{
		$this->load->model('Perusahaan_Model');
		$data['lokasi'] = $this->Perusahaan_Model->getLokasi($id);
		$this->load->view('lokasi',$data);
	}

}

/* End of file Anak.php */
/* Location: ./application/controllers/Anak.php */
 ?>