<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class 	M_Pesan extends CI_Model {

		public function tm_pesan()
	{
		return $this->db->where('id_pembeli',$this->session->userdata('id_pembeli'))->get('nota')->result();
	}
	

}

/* End of file M_Pesan.php */
/* Location: ./application/models/M_Pesan.php */