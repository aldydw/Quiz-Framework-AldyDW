<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function index()
	{
		$this->load->model('Perusahaan_Model');
		$data['usaha'] = $this->Perusahaan_Model->getPerusahaan();
		$this->load->view('perusahaan', $data);
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 ?>