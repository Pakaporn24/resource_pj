<?php
defined('BASEPATH') or exit('No direct script access allowed');

class repair extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//chk admin status
		// if ($this->session->userdata('user_status') != 1) {
		// 	redirect('login/logout', 'refresh');
		// }

		$this->load->model('function_model');
	}

	public function index()
	{
		// __header_admin();
		$data['query']=$this->function_model->list_all();
		$this->load->view('template/repair_system/header_admin');
		$this->load->view('repair_system/repair', $data);
		$this->load->view('template/footer');
	}


	public function repair_admin()
	{
		$data['query']=$this->function_model->list_all();
		
		$this->load->view('template/header_admin');
		$this->load->view('repair', $data);
		$this->load->view('template/footer');

	}
	public function page_b()
	{

		$this->load->view('page_b');

	}

	public function repair_add(){

		$data = array();
		// var cus_name = $("#cus_name").val();
		// var cus_email = $("#cus_email").val();
		// var cus_tel = $("#cus_tel").val();
		// var cus_type = $("#cus_type").val();
		// var cus_equipment = $("#cus_equipment").val();
		// var cus_details = $("#cus_details").val();
		// var repair_type = $("#repair_type").val();
		// var repair_equipment = $("#repair_equipment").val();


		$cus_name = $this->input->post('cus_name');
		$cus_tel = $this->input->post('cus_tel');
		$cus_email = $this->input->post('cus_email');


		$cus_type = $this->input->post('cus_type');
		$cus_equipment = $this->input->post('cus_equipment');
		$cus_details = $this->input->post('cus_details');
		$repair_address = $this->input->post('repair_address');

		// $rp_case_address = $this->input->post('rp_case_address');
		$time_add = $this->input->post('time_add');

		
			$data = array(
				'rp_case_username' => $cus_name,
				'rp_case_usertel' => $cus_tel,
				'rp_case_useremail' => $cus_email,

				'rp_case_name' => $cus_type,

				'rp_case_detail' => $cus_details,

			

				'rp_case_address' => $repair_address,
				'rp_add_date' => $time_add,

				'rp_case_status' => 1,
				
		
			);
			
				$this->db->insert('rp_case',$data);
			
			echo "บันทึกข้อมูลสำเร็จ";
		}
	


}
