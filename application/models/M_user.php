<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function masuk()
			{
			$nama_pembeli=$this->input->post('nama_pembeli');
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$data_simpan=array('nama_pembeli'=>$nama_pembeli,
								'username'=>$username,
								'password'=>md5($password)
			);
			$proses=$this->db->insert('pembeli',$data_simpan);
			if($this->db->affected_rows()>0)
			{
				return TRUE;
			}

					else {
						return FALSE;
						 }

			}

				public function login()
			{
				return $this->db
				->where('username',$this->input->post('username'))
					->where('password',$this->input->post('password'))
					->get('pembeli');
			}

}

