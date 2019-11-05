<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classroom extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('classroom_model');
	}

	public function insert()
	{
		$this->load->view('css');
		$this->load->view('head');
		$this->load->view('baner');
		$this->load->view('menu');
		$this->load->view('insertclassroom_view');
		$this->load->view('foot');
	}

	public function index()
	{
		$data['query'] = $this->classroom_model->showclassroom();
		$this->load->view('css');
		$this->load->view('head');
		$this->load->view('baner');
		$this->load->view('menu');
		$this->load->view('showclassroom_view',$data);
		$this->load->view('foot');
	}

	public function edit($c_id)
	{
		$data['query'] = $this->classroom_model->read($c_id);
		$this->load->view('css');
		$this->load->view('head');
		$this->load->view('baner');
		$this->load->view('menu');
		$this->load->view('editclassroom_view',$data);
		$this->load->view('foot');
	}

	public function adding(){
		$this->classroom_model->addclassroom();
		redirect('classroom','refresh');
	}
	public function editdata(){
		$this->classroom_model->editclassroom();
		redirect('classroom','refresh');
	}
	public function delete($c_id){
		$this->classroom_model->deleteclassroom($c_id);
		redirect('classroom','refresh');
	}
}
