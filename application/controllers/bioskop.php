<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bioskop extends CI_Controller {

public function rumah()
	{
		$this->load->model('m_bioskop');
		$data['tampil_film']=$this->m_bioskop->tampil_film();
		$data['konten']="isine";
		$data['judul']="rumahku";
		$this->load->view('index2',$data);

	}

	public function index()
	{
		$this->load->model('m_bioskop');
		$data['tampil_film']=$this->m_bioskop->tampil_film();
		$data['konten']="isine";
		$data['judul']="dashboardku";
		$this->load->view('index2',$data);

	}


	public function pesan_tiket(){
		$this->load->model('m_bioskop');
		$data['tampil_film']=$this->m_bioskop->tampil_film();
		$data['konten']="order";
		$data['judul']="pesantiket";
		$this->load->view('index2', $data);

	}

		public function jadwal_hari_ini(){

		$data['konten']="schedule";
		$data['judul']="jadwal";
		$this->load->view('index2', $data);

	}
	public function kritik_saran(){

		$data['konten']="kritiksaran";
		$data['judul']="jadwal";
		$this->load->view('index2', $data);

	}
	public function tm_film(){
	
		$data['konten']="isine";
		$data['judul']="daftar film";
			if ($this->session->userdata('login')==TRUE) {
			$data['beli']="beli";
			$data['url']="index.php/bioskop/beli";
		}else{
			$data['beli']="login dulu sebelum beli";
			$data['url']="index.php/bioskop/login";
		}
		$this->load->view('index2', $data);
	}
	public function detail_film($id_film=''){
		$this->load->model('m_bioskop','bio');
		$data['detail']=$this->bio->detail($id_film);
		$data['konten']="detail_bioskop";
		$data['judul']="detail film";
		if ($this->session->userdata('login')==TRUE){
			$data['beli']="Beli";
			$data['url']="index.php/cart/add_cart/".$id_film;
		} else {
			$data['beli']="LOGIN DULU SEBELUM BELI";
			$data['url']="index.php/bioskop/login";
		}
		$this->load->view('index2', $data);
	}
	public function  login()
	{
		$this->load->view('login');
		
	}
	public function  register()
	{
		$this->load->view('register');
		
	}
	public function simpan(){
		
		if($this->input->post('submit')){
			$this->form_validation->set_rules('nama_pembeli', 'nama_pembeli', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			if ($this->form_validation->run() == TRUE ) {
				$this->load->model('m_user');
			} else {
			$this->session->set_flashdata('pesan',validation_errors());
			redirect('bioskop/register','refresh');
			}
		}
		if($this->m_user->masuk()==TRUE){
			$this->session->set_flashdata('pesan', 'Sukses Simpan');
			redirect('bioskop/login','refresh');

		}

		else {
			$this->session->set_flashdata('pesan', 'Gagal Simpan');
			redirect('bioskop/register','refresh');
		}
		

		}
		public function proses_login()
		{
				if($this->input->post('login')){
						$this->form_validation->set_rules('username', 'username', 'trim|required');
						$this->form_validation->set_rules('password', 'password', 'trim|required');
						$this->form_validation->set_rules('nama_pembeli', 'nama_pembeli', 'trim|required');
				if ($this->form_validation->run() == TRUE) {
					$this->load->model('m_user');
				if($this->m_user->login()->num_rows()>0)
						{
						$data=$this->m_user->login()->row();
						$array = array(
							'login' => TRUE,
							'username'=> $data->username,
							'nama_pembeli'=> $data->nama_pembeli,
							'password'=>$data->password,
							'id_pembeli'=>$data->id_pembeli
						);
						
						$this->session->set_userdata( $array );
						redirect('bioskop','refresh');
					} else{
						$this->session->set_flashdata('pesan', 'username dan password salah');
						redirect('bioskop/login','refresh');
					}
				} else {
					$this->session->set_flashdata('pesan', validation_errors());
					redirect('bioskop/login','refresh');
				}
				}	
		}
public function logout()
	{
		$this->session->sess_destroy();
		redirect('bioskop','refresh');
	}
}




/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */