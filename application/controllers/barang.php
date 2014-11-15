<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$data['barang'] = 
		array(array('1', 'bejo', 'tas kecil'),
		      array('2', 'jono', 'tas ransel'));
		$this->load->view('daftar_barang', $data);
	}

	public function tambah() {
		echo "tambah barang";
	}
	
}