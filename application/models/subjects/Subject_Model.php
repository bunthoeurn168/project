<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_Model extends CI_Model
{
  public function __construct() 
	{
    parent::__construct();
  }
  function create_subject($data) {
    $this->db->insert('tbsubject',$data);
  }
  function manage_subject() 
  {
    $query = $this->db->get('tbsubject');
    return $query->result();
  }
 
	public function edit_subject($id)
	{
		$query=$this->db->get_where('tbsubject',['id' => $id]);         
		return $query->row_array();
	}
  function update_subject($data, $id) {
    return $this->db->update('tbsubject', $data, ['id' => $id]);
  }

  function delete_subject($id) {
    $this->db->delete('tbsubject', ['id'  =>  $id]);
  }
  function fetch_subject()
  {
   $this->db->order_by("subject_name", "ASC");
   $query = $this->db->get("tbsubject");
   return $query->result();
  }
  function create_combine($data) {
    $this->db->insert('tbsubjectcombination',$data);
  }
  function manage_combine() {
    $query = $this->db->select('sbc.id, sbc.status, sbc.creation_date, c.class_name, sub.subject_name')
                      ->from('tbsubjectcombination as sbc')
                      ->join('tbclass as c','sbc.class_id=c.id')
                      ->join('tbsubject as sub','sbc.subject_id=sub.id')
                      ->get();
    return $query->result();
  }
  function status_active($data, $id) {
    return $this->db->update('tbsubjectcombination', $data, ['id' => $id]);
  }
  function status_deactive($data, $id) {
    return $this->db->update('tbsubjectcombination', $data, ['id' => $id]);
  }



  function load_subject($class_id)
  {
    $query = $this->db->select('cls.id, sub.subject_name')
                      ->from('tbsubjectcombination as sbc')
                      ->join('tbsubject as sub','sbc.subject_id = sub.id')
                      ->join('tbclass as cls', 'sbc.class_id = cls.id')
                      ->where('cls.id', $class_id)
                      ->get();
    $output = '';
   foreach($query->result() as $row)
   {
    $output .= $row->subject_name . '<br><input type="text" name="marks"> <br><br>';
   }
   return $output;
  }









}



?>