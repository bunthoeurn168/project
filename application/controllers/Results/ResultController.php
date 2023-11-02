<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ResultController extends CI_Controller
{
  public function __construct()
  {
	  parent::__construct();
    $this->load->model('Students/Student_Model');
    $this->load->model('Subjects/Subject_Model');
    $this->load->model('Classrooms/ClassRoom_Model');
    // $this->load->model('Results/Result_Model');
  }
  function index() 
  {
    $data['class'] = $this->ClassRoom_Model->fetch_class();
    $this->load->view('results/add-result', $data);
  }
  public function loadStudent()
  {
    if($this->input->post('class_id'))
    {
      echo $this->Student_Model->load_student($this->input->post('class_id'));
    }
  }
  function loadSubject()
  {
    if($this->input->post('class_id'))
    {
     echo $this->Subject_Model->load_subject($this->input->post('class_id'));
    }
  }
  function createResult() {
    if($this->input->post('save'))
    {
      $class_id = $this->input->post('class_id');
      $student_id = $this->input->post('student_id');
      $marks = $this->input->post('marks');
      $posting_date = date('Y-m-d H:i:s');
      for ($i=0; $i < count($class_id); $i++) { 
        echo $class_id[$i];
      }
      // $data = array(
      //   'class_id'          => $class_id,
      //   'student_id'        => $student_id,
      //   'marks'             => $marks,
      //   'posting_date'      => $posting_date
      // );
      // $this->Result_Model->create_result($data);
      // redirect(base_url('result'));
    }
  }

  // function manageResult() {
  //   $data['result'] = $this->Result_Model->manage_result();
  //   $this->load->view('results/manage-result', $data);
  // }




}
?>












