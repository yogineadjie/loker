<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
 	public function index() {
		if ($this->session->userdata('logged_in'))
		{
			redirect('barang');
		}
		else
		{
			$this->load->view('form_login2');
		}
	}

	public function authenticate(){
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			echo $username;
		
		$this->load->model('auth');
		//if ($this->auth->check($username, $password)) {
			$data = array(
					'username' => $username,
					'logged_in' => TRUE);
			$this->session->set_userdata($data);
			redirect('barang');
		}
		
		else
		{
			$this->index();
		}
	
}
}

