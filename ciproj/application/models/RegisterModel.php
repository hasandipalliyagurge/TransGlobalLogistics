<?php
class Customer_model extends CI_Model{



	public function getData()
 	{
 		$query=$this->db->get('customers');
 		return $query->result();
 	}

 	public function saveData($data)
 	{
 		return $this->db->insert('customers',$data);
 	}

}
?>