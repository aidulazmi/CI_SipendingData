<?php

	class c_user extends CI_Controller{


		function __construct(){
			parent:: __construct();
			$this->load->model('m_user');
		}
		function index(){
			$this->load->view('user/v_user');
		}
		function simpan(){

			$data = array('judul' =>$this->input->post('judul') ,
							'isi' => $this->input->post('isi'),
							'status' => 'ts'
							 );

			$this->m_user->simpan($data,'posting');
			$this->index();
		}
		function tampildata(){
			$data['user'] = $this->m_user->tampil()->result();
			$this->load->view('user/v_duser',$data);
		}
	}

?>