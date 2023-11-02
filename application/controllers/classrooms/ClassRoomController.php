<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClassRoomController extends CI_Controller{
  public function __construct()
  {
	  parent::__construct();
		$this->load->model('classrooms/ClassRoom_Model');
  }

  function index() {
    $this->load->view('classrooms/create-class');
  }

  function create() {
    if($this->input->post('save'))
    {
      $class_name = $this->input->post('class_name');
      $section = $this->input->post('section');
      $creation_date = date('Y-m-d H:i:s');
      $data = array(
        'class_name'    => $class_name,
        'section'       => $section,
        'creation_date' => $creation_date
      );
      $this->ClassRoom_Model->insert_class($data);
      redirect(base_url('class'));
    }
  }

  function manageClass() {
    $data['data']=$this->ClassRoom_Model->display_records();
    $this->load->view('classrooms/manage-class', $data);
  }
  function edit($id) {
    $data['data'] = $this->ClassRoom_Model->edit_class($id);
    $this->load->view('classrooms/edit-class',$data);
  }
  function update($id) {
    if($this->input->post('update'))
    {
      $class_name = $this->input->post('class_name');
      $section = $this->input->post('section');
      $updation_date = date('Y-m-d H:i:s');
      $data = array(
        'class_name'    => $class_name,
        'section'       => $section,
        'updation_date' => $updation_date
      );
      $this->ClassRoom_Model->update_class($data, $id);
      redirect(base_url('classroom/edit/'.$id));
    }
  }

  function delete($id) {
    $this->ClassRoom_Model->delete_class($id);
    redirect(base_url('manage-class'));
   }


}
?>



