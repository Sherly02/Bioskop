<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class 	Pesanan  extends CI_Controller {

	function __construct()
{
	parent::__construct();
	$this->load->model('m_pesan','psn');
}
	public function index()
	{
		$data['pesanan']=$this->psn->tm_pesan();
		$data['konten']="v_pesan";
		$this->load->view('index2',$data,FALSE);
	}
	  public function hapus($id_nota)
	 {
		$this->db->where('id_nota',$id_nota)->delete('nota');
		redirect('pesanan','refresh');
	 }
}

/* End of file pesanan.php */
/* Location: ./application/controllers/pesanan.php */