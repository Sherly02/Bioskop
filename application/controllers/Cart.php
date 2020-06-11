<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->model('m_cart','crt');
	}
	public function index()
	{
		$data['konten']="showcart";
		$this->load->view('index2',$data,FALSE);
	}

	public function add_cart($id)
	{
		$this->load->model('m_bioskop');
		$detail=$this->m_bioskop->detail($id);
		$data = array(
			'id'      => $detail->id_film,
			'qty'     => 1,
			'price'   => 45000,
			'name'    => $detail->nama_film,
			'options' => array('kategori' => $detail->nama_kategori)
		);
		
		$this->cart->insert($data);
		redirect('bioskop/detail_film/'.$id,'refresh');
	}

	 public function hapus_item($id)
	 {
	 	$data = array(
	 		'rowid' =>$id,
	 		'qty' 	=> 0
	 	);
	 	$this->cart->update($data);
	 	redirect('cart','refresh');
	 }

	 public function simpan()
	 {
	 	if($this->input->post('simpan')){
	 		$this->load->model('m_cart');
	 		$id_nota=$this->m_cart->simpan_cart();
	 			if($id_nota>0){
	 			$this->cart->destroy();
	 			redirect('cart/pembayaran/'.$id_nota,'refresh');
	 		} else{
	 			redirect('cart');
	 			}
	 	}
	 }
	 public function pembayaran($id)
	 {
	 	$this->load->model('m_cart');
	 	$nota=$this->m_cart->get_total($id);
	 	$data['total']=$nota->grand_total+$id;
	 	$data['konten']="v_pembayaran";
	 	$this->load->view('index2',$data,FALSE);
	 }
	 	function konfirm($id_nota)
	 {
	 	$data['id_nota']=$id_nota;
	 	$data['konten']="v_konfirm";
	 	$this->load->view('index2',$data,FALSE);

	 }
	 	function proses_upload()
	 {
	 	$config['upload_path'] = './asset/bukti/';
	 	$config['allowed_types'] = 'gif|jpg|png';
	 	$config['max_size']  = '1024';
	 	$config['max_width']  = '1024';
	 	$config['max_height']  = '768';
	 	
	 	$this->load->library('upload', $config);
	 	
	 	if ( ! $this->upload->do_upload('bukti')){
	 		$this->session->flashdata('pesan', $this->upload->display_errors());
	 		redirect('cart/konfirm/'.$this->input->post('id_nota'),'refresh');
	 	}
	 	else{
	 		if($this->crt->update_bukti($this->upload->data('file_name'))){
	 				$this->session->set_flashdata('pesan','sukses upload bukti pembayaran silahkan
	 					tunggu konfirmasi dari admin.');
	 				redirect('cart/konfirm/'.$this->input->post('id_nota'),'refresh');
	 		}
	 		
	 	}
	 }
	 function kursi($id_nota)
	 {
	 	$data['kursi']=$kursi;
	 	$data['konten']="v_kursi";
	 	$this->load->view('index2',$data,FALSE);

	 }

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */



