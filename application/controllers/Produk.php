<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index($id)
	{
		$this->load->model('Perusahaan_Model');
		$data['produk'] = $this->Perusahaan_Model->getProduk($id);
		$this->load->view('produk',$data);
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>