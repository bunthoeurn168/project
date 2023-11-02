<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubjectController extends CI_Controller{
  public function __construct()
  {
	  parent::__construct();
		$this->load->model('Subjects/Subject_Model');
    $this->load->model('Classrooms/ClassRoom_Model');
  }
  function index() {
    $this->load->view('subjects/create-subject');
  }
  function createSubject() {
    if($this->input->post('save'))
    {
      $subject_name = $this->input->post('subject_name');
      $subject_code = $this->input->post('subject_code');
      $creation_date = date('Y-m-d H:i:s');
      $data = array(
        'subject_name'    => $subject_name,
        'subject_code'    => $subject_code,
        'creation_date'   => $creation_date
      );
      $this->Subject_Model->create_subject($data);
      redirect(base_url('subject'));
    }

  }

  function manageSubject() {
    $data['data']=$this->Subject_Model->manage_subject();
    $this->load->view('subjects/list-subject', $data);
  }

  function edit($id) {
    $data['subject'] = $this->Subject_Model->edit_subject($id);
    $this->load->view('subjects/edit-subject',$data);
  }
  function update($id) {
    if($this->input->post('update'))
    {
      $subject_name = $this->input->post('subject_name');
      $subject_code = $this->input->post('subject_code');
      $updation_date = date('Y-m-d H:i:s');
      $data = array(
        'subject_name'    => $subject_name,
        'subject_code'    => $subject_code,
        'updation_date'   => $updation_date
      );
      $data['subject'] = $this->Subject_Model->update_subject($data, $id);
      redirect(base_url('subject/edit/'.$id));
    }
    
  }

 function delete($id) {
  $this->Subject_Model->delete_subject($id);
  redirect(base_url('manage-subject'));
 }
 function combination() {
    $data['class'] = $this->ClassRoom_Model->fetch_class();
    $data['subject'] = $this->Subject_Model->fetch_subject();
    $this->load->view('subjects/subject-combination', $data);
 }
 function createcombine() {
  if($this->input->post('save'))
  {
    $class_id = $this->input->post('class_id');
    $subject_id = $this->input->post('subject_id');
    $creation_date = date('Y-m-d H:i:s');
    $data = array(
      'class_id'     =>  $class_id,
      'subject_id'   =>  $subject_id,
      'creation_date'=>  $creation_date
    );
    $this->Subject_Model->create_combine($data);
    redirect(base_url('combination'));

  }
 }

function manageCombine() {
  $data['data']=$this->Subject_Model->manage_combine();
  $this->load->view('subjects/manage-combine', $data);
}
function statusActive($id) {
  $data = array(
    'status' => 1
  );
  $this->Subject_Model->status_active($data, $id);
  redirect(base_url('manage-combine'));
}
function statusDeactive($id) {
  $data = array(
    'status' => 0
  );
  $this->Subject_Model->status_deactive($data, $id);
  redirect(base_url('manage-combine'));
}


}

?>