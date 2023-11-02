<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller{
  public function __construct()
  {
	  parent::__construct();
    // $this->load->model('Subjects/Subject_Model');
    $this->load->model('Classrooms/ClassRoom_Model');
    $this->load->model('Students/Student_Model');
  }
  function index() 
  {
    $data['class'] = $this->ClassRoom_Model->fetch_class();
    $this->load->view('students/add-student', $data);
  }
  function createStudent() 
  {
    if($this->input->post('save'))
    {
      $name = $this->input->post('name');
      $roll_id = $this->input->post('roll_id');
      $gender = $this->input->post('gender');
      $dob = $this->input->post('dob');
      $class_id = $this->input->post('class_id');
      $creation_date = date('Y-m-d H:i:s');
      $data = array(
        'name'          => $name,
        'roll_id'       => $roll_id,
        'gender'        => $gender,
        'dob'           => $dob,
        'class_id'      => $class_id,
        'creation_date' => $creation_date
      );
      $this->Student_Model->create_student($data);
      redirect(base_url('student'));
    }
  }
  function manageStudent() 
  {
    $data['student']=$this->Student_Model->manage_student();
    $this->load->view('students/manage-student', $data);
  }
  function edit($id) 
  {
    $data['student'] = $this->Student_Model->edit_student($id);
    $this->load->view('students/edit-student',$data);
  }
  function update($id)
  {
    if($this->input->post('update'))
    {
      $name = $this->input->post('name');
      $roll_id = $this->input->post('roll_id');
      $gender = $this->input->post('gender');
      $dob = $this->input->post('dob');
      $status = $this->input->post('status');
      $data = array(
        'name'    =>  $name,
        'roll_id' =>  $roll_id,
        'gender'  =>  $gender,
        'dob'     =>  $dob,
        'status'  =>  $status 

      );
      $data['student'] = $this->Student_Model->update_student($data, $id);
      redirect(base_url('student/edit/'.$id));
    }
  }









}


?>



