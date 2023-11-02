<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_Model extends CI_Model
{
  public function __construct() 
	{
    parent::__construct();
  }

  public function create_student($data)
  {
    $this->db->insert('tbstudent',$data);
  }
  function manage_student()
  {
    $query = $this->db->select('st.id, st.name, st.roll_id, st.gender, st.dob, cls.class_name, cls.section, st.creation_date, st.status')
                      ->from('tbstudent as st')
                      ->join('tbclass as cls','st.class_id=cls.id')
                      ->get();
    return $query->result();
  }
  function edit_student($id) 
  {
    $query = $this->db->select('st.id, st.name, st.roll_id, st.gender, st.dob, cls.class_name, cls.section, st.creation_date, st.status')
                      ->from('tbstudent as st')
                      ->join('tbclass as cls', 'st.class_id=cls.id')
                      ->where('st.id', $id)
                      ->get();
    return $query->result();
  }
  function update_student($data, $id)
  {
    return $this->db->update('tbstudent', $data, ['id' => $id]);
  }

  public function load_student($class_id)
  {
    $query = $this->db->select('cls.id, stu.id, stu.name')
                      ->from('tbstudent as stu')
                      ->join('tbclass as cls','stu.class_id = cls.id')
                      ->where('cls.id', $class_id)
                      ->get();
    $output = '<option value="">Select student</option>';
    foreach($query->result() as $row)
    {
      $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
    }    
    return $output;
  }









  
}

?>