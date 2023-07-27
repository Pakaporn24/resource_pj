<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//chk admin status
		if ($this->session->userdata('user_status_repair') != 1) {
			redirect('login/logout', 'refresh');
		}
		$this->load->model('function_model');
	}

	public function index()
	{
		// __header_admin();
		
		$data['query']=$this->function_model->list_all();
		$this->load->view('template/repair_system/header_admin');
		$this->load->view('repair_system/admin/admin_index', $data);
		$this->load->view('template/footer');
	}
	public function page_choice()
	{

		$this->load->view('page_choice');

	}
	public function admin_list()
	{
		$data['query']=$this->function_model->rp_list_case();
		$this->load->view('template/repair_system/header_admin');

		$this->load->view('template/footer');
		$this->load->view('repair_system/admin/admin_list', $data);

	}


}
