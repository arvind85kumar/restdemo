<?php
class Users_model extends CI_Model {


	public function getUser()
	{
		$this->input->post('id');
		$data=$this->db->query("SELECT *FROM products")->result_array();
		return $data;
	}
}
?>