<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClassRoom_Model extends CI_Model{
  public function __construct() 
	{
    parent::__construct();
  }

  public function insert_class($data)
  {
    $this->db->insert('tbclass',$data);
  }
  
  function display_records() 
  {
    $query = $this->db->get('tbclass');
    return $query->result();
  }
  public function edit_class($id)
	{
		$query=$this->db->get_where('tbclass',['id' => $id]);         
		return $query->row_array();
	}
  function update_class($data, $id) {
    return $this->db->update('tbclass', $data, ['id' => $id]);
  }
  
  function delete_class($id) {
    $this->db->delete('tbclass', ['id'  =>  $id]);
  }
  function fetch_class()
  {
   $this->db->order_by("class_name", "ASC");
   $query = $this->db->get("tbclass");
   return $query->result();
  }


}



?>