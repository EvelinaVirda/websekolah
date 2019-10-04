<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function proses_kontak()
	{
		$id_kontak = $this->input->post('id_kontak');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$subjek = $this->input->post('subjek');
		$pesan = $this->input->post('pesan');
 
		$data = array(
			'id_kontak' => $id_kontak,
			'nama' => $nama,
			'email' => $email,
			'subjek' => $subjek,
			'pesan' => $pesan
			);
		$this->m_data->proses_kirim_kontak($data,'kontak');

		?><script>alert("Pesan Terkirim!");document.location.href="<?php echo base_url('v_index') ?>"</script>
		<?php
	}

	public function hapus_pesan($id_kontak)
    {
        $where = array('id_kontak' => $id_kontak);
        $this->m_data->hapus_pesan($where,'kontak');
        redirect('admin/index');
    }

}