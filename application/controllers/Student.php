<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('student_model');
    }

	public function insert()
	{
		$this->load->view('css');
		$data['groups'] = $this->student_model->getAllGroup();
		$this->load->view('head');
		$this->load->view('baner');
		$this->load->view('menu');
		$this->load->view('insertstudent_view',$data);
		$this->load->view('foot');
	}
	public function index()
	{
		$this->load->view('css');
		$data['query'] = $this->student_model->showstudent();
		$this->load->view('head');
		$this->load->view('baner');
		$this->load->view('menu');
		$this->load->view('showstudent_view',$data);
		$this->load->view('foot');
	}
	public function edit($std_id)
	{
		$this->load->view('css');
		$data['query'] = $this->student_model->read($std_id);
		$data['groups'] = $this->student_model->getAllGroup($std_id);
		$this->load->view('head');
		$this->load->view('baner');
		$this->load->view('menu');
		$this->load->view('editstudent_view',$data);
		$this->load->view('foot');
	}
	public function delete($std_id)
	{
		$data = $this->db->select('*')->from('student')->where('std_id',$std_id)->get()->row();
			$file_name = $data->std_pic;
			echo $std_id;
			if($file_name != ""){
				@unlink('./img/'.$file_name);
			}
			$this->student_model->deletestudent($std_id);
	}
	public function editdata()
	{
		$this->student_model->editstudent();
	}
	public function adding()
	{
		$this->student_model->addstudent();
	}

}
