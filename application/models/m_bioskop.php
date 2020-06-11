<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bioskop extends CI_Model {

public function tampil_film()

	{
	  $tm_film=$this->db
	  	   			->join('kategori','kategori.id_kategori=film.id_kategori')
				   	->get('film')

					->result();

		return $tm_film;
	}

public function detail($a)
	{

	  $tm_film=$this->db
					->where('id_film',$a)
					->join('kategori','kategori.id_kategori=film.id_kategori')
					->get('film')
					->row();
		return $tm_film;
	}


	

}