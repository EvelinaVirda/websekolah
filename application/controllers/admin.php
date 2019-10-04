<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
		if($this->session->userdata('masuk') != TRUE){
            $url=base_url('login');
            redirect($url);
        }
	}

	public function index()
	{
		$data['data_kontak'] = $this->m_data->tampil_data_kontak('kontak');
        $this->load->view('template/admin_header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/index',$data);
        $this->load->view('template/admin_footer');
	}
}
