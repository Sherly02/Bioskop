<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cart extends CI_Model {

	public function simpan_cart()
	{
		$tgl_beli=date('Y-m-d',mktime(date('H'),date('i'),date('s'),date('m'),date('d'),date('y')));
		$object=array(
			'id_pembeli'=>$this->session->userdata('id_pembeli'),
			'tgl_beli'=>$tgl_beli,
			'grand_total'=>$this->input->post('grand_total'),
			'status'=>'',
			'bukti'=>''
		);
		$this->db->insert('nota',$object);
		$tm_nota=$this->db->order_by('id_nota','desc')
						->limit(1)
						->get('nota')
						->row();
	$hasil=array();
	for($i=0;$i<count($this->input->post('id_film'));
	$i++){
		$hasil[]=array(
			'id_nota'=>$tm_nota->id_nota,
			'id_film'=>$this->input->post('id_film')[$i],
			'qty'=>$this->input->post('qty')[$i]
		);
	}	
	$proses=$this->db->insert_batch('pembelian',$hasil);
	if($proses){
		return $tm_nota->id_nota;
	} else{
		return 0;
	}
	}
	public function get_total($id)
	{
		return $this->db->where('id_nota',$id)
						->get('nota')
						->row();
	}
		function update_bukti($filename)
	{
		$object=array(
				'bukti'=>$filename
		);
		return $this->db->where('id_nota',$this->input->post('id_nota'))
													->update('nota',$object);
	}

}

/* End of file M_cart.php */
/* Location: ./application/models/M_cart.php */