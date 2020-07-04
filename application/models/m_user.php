<?php

	class m_user extends CI_Model
	{
		
		function tampil(){
			return $this->db->get("posting");
		}
		function simpan($data,$table){
			$this->db->insert($table,$data);
		}
	}

?>