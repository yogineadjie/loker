<?php
class Transaksi extends CI_Model{

public function simpan($data) {
	if ($this->db->insert('transaksi', $data)) {
		return TRUE;
		} else {
			return FALSE;
		}
		
		$data = array('nama' => 'Nama ku',
					'alamat' => 'Alamat ku',
					'tanggal' => '12/11/2014');
					
		$this->db->insert('tabel', $data);
		
}

public function daftar() {
	$query = $this->db->get('transaksi');
	if ($query->num_rows() > 0) {
		return $query->result_array();
	} else {
		return FALSE;
		}
	}
}
?>