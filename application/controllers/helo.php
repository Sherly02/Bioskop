<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helo extends CI_Controller {

	public function index()
	{
		$data['judul']="homepage";
		$data['nama']="Budi Gunawan";
		$this->load->view('hello_world',$data);
	}
	public function profil()
	{
		$data['judul']="Profil";
		$this->load->view('v_profil',$data);
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */