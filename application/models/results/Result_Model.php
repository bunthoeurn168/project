<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_Model extends CI_Model
{
  public function __construct() 
	{
    parent::__construct();
  }
  function create_result($data) {
    
  }
  // function manage_result()
  // {
  //   $query = $this->db->select('st.id, st.name, st.roll_id, st.gender, st.dob, cls.class_name, cls.section, st.creation_date, st.status')
  //                     ->from('tbstudent as st')
  //                     ->join('tbclass as cls','st.class_id=cls.id')
  //                     ->get();
  //   return $query->result();
  // }



}


?>