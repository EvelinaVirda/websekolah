<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V_index extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['profile_sekolah'] = $this->m_data->profile_sekolah()->result();
		$this->load->view('template/header');
		$this->load->view('v_index',$data);
		$this->load->view('template/footer');
	}
}
