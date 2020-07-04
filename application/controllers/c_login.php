<?php


class c_login extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('login/v_login');
	}

	function validasil(){

		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		 $query = $this->m_login->test_login('user', array('username' => $username), array('password' => $password));

		if($query){
			 foreach ($query as $k) {
			$data = array('username' => $this->input->post('username'),
			'status'  => $k->status,
			'log_in' => true
			 );

			$this->session->set_userdata($data);
			 if($this->session->userdata("status") == "admin"){
                            redirect('c_admin');
                        }else{
                            redirect('c_user');
                        }

                    }
              
		}else{
			$this->index();
		}
	}
	function logout(){
		$this->session->sess_destroy();
		$this->index();
	}

}
?>