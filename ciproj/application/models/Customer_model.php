<?php
 class Customer_model extends CI_Model
 {

 	public function getData()
 	{
 		$query=$this->db->get('customers');
 		return $query->result();
 	}


 	public function saveData($data)
 	{
 		return $this->db->insert('customers',$data);
 	}

    public function getAllData($record_id){
    	$query=$this->db->get_where('customers',array('id' => $record_id));
    	if($query->num_rows() > 0)
    	{
    		return $query->row();
    	}
    }

     public function updateData($record_id,$data){
     	return $this->db->where('id', $record_id)
               ->update('customers', $data);

     }

     public function deleteData($record_id)
     {
     	return $this->db->delete('customers',array('id' => $record_id));
     }
 } 
?>