<?php

	class m_admin extends CI_Model
	{
		
function tampil(){
			return $this->db->get("posting");
		}
		function simpan($data,$table){
			$this->db->insert($table,$data);
		}
		function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	}

?>