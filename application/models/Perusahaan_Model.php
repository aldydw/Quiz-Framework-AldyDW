<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getPerusahaan()
		{
			$query = $this->db->get('perusahaan');
			return $query->result();
		}

		public function getProduk($id)
		{
			$this->db->select('namaPerusahaan,namaProduk,tanggalProduksi,tanggalKadaluarsa');
			$this->db->from('perusahaan');
			$this->db->join('produk', 'produk.fk_perusahaan = perusahaan.id');
			$this->db->where('perusahaan.id =', $id);
			$query = $this->db->get();
			return $query->result();
		}
		public function getLokasi($id)
		{
			$this->db->select('namaPerusahaan,namaLokasi,lokasi.tanggalBerdiri');
			$this->db->from('perusahaan');
			$this->db->join('lokasi', 'lokasi.fk_perusahaan = perusahaan.id');
			$this->db->where('perusahaan.id =', $id);
			$query = $this->db->get();
			return $query->result();
		}
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>