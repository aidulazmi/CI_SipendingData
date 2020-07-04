<?php

	class c_admin extends CI_Controller{

		function __construct(){
			parent:: __construct();
			$this->load->model('m_admin');
		}
		function index(){
			$data['user'] = $this->m_admin->tampil()->result();
			$this->load->view('admin/v_admin',$data);
		}
		function tampildata(){
			$data['user'] = $this->m_user->tampil()->result();
			$this->load->view('admin/v_admin',$data);
		}
		function edit_data($id_pos){
		$where = array('id_pos' => $id_pos);
		$data['user'] = $this->m_admin->edit_data($where,'posting')->result();
		$this->load->view('admin/e_admin',$data);
		}
		function update(){
		$id_pos = $this->input->post('id_pos');

		$data = array(

							'judul' =>$this->input->post('judul') ,
							'isi' => $this->input->post('isi'),
							'status' => $this->input->post('status')
			);

	$where = array(
		'id_pos' => $id_pos
	);
$this->m_admin->update_data($where,$data,'posting');
	$this->index();
		
	}
}

?>