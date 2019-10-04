<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_sekolah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
		if($this->session->userdata('masuk') != TRUE){
            $url=base_url('/');
            redirect($url);
        }
	}

	public function index()
	{
		$data['profile_sekolah'] = $this->m_data->profile_sekolah()->result();
        $this->load->view('template/admin_header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/profile_sekolah',$data);
        $this->load->view('template/admin_footer');
	}

	public function update_profile()
	{
		$id_profile= $this->input->post('id_profile');
		$judul_profile = $this->input->post('judul_profile');
		$isi_profile = $this->input->post('isi_profile');
		$sub_isi_profile = $this->input->post('sub_isi_profile');

		$data = array(
			'judul_profile' => $judul_profile,
			'isi_profile' => $isi_profile,
			'sub_isi_profile' => $sub_isi_profile
		);

		$where = array(
			'id_profile' => $id_profile
		);

		$this->m_data->update_profile($where,$data,'profile');
		?><script>alert("Profile Sekolah Berhasil DiUpdate!");document.location.href="<?php echo base_url('profile_sekolah') ?>"</script>
		<?php
	}
}