<?php
class M_barang extends CI_Model{

	function barang_list(){
		$hasil=$this->db->query("SELECT * FROM tbl_barang");
		return $hasil->result();
	}
	
}