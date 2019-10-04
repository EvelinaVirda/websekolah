<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function buat_berita()
	{
        $this->load->view('template/admin_header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/berita');
        $this->load->view('template/admin_footer');
	}

	public function tambah_berita(){

        $this->form_validation->set_rules('judul','judul ','required');
        $this->form_validation->set_rules('isi','isi','required');
 
        //jika form tidak ada yang kosong jalankan perintah dibawah
        if($this->form_validation->run() != false){
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            $new_name = time().$_FILES["gambar"]['name'];
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config);
 
        if ( ! $this->upload->do_upload('gambar'))
        {
            //jika upload foto error
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            // $this->load->view('karyawan/dokter', $error);
        }
        else
        {
            //jika upload foto berhasil dilanjutkan proses form
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');
            $data = array('upload_data' => $this->upload->data());
            print_r($this->upload->data());
            $datafoto=$this->upload->data();
            $nm_file = $datafoto['orig_name'];
            $data = array(
                'gambar' => $nm_file,
                'judul' => $judul,
                'isi' => $isi
                );
            $this->m_data->tambah_berita($data,'berita');
            redirect('berita/buat_berita');
        }
    } else{
        $this->load->view('template/admin_header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/berita');
        $this->load->view('template/admin_footer');
          }
    }

    public function arsip_berita()
	{
		$data['arsip_berita'] = $this->m_data->arsip_berita('berita');
        $this->load->view('template/admin_header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/arsip_berita',$data);
        $this->load->view('template/admin_footer');
	}

	public function hapus_berita($id_berita){
        // query untuk memilih data karyawan berdasarkan id karyawan
        $image_path = './gambar/';
        $query_get_image = $this->db->get_where('berita', array('id_berita' => $id_berita));
        foreach ($query_get_image->result() as $record)
        {
        // $filename adalah variabel untuk menyimpan path gambar + nama gambar
            $filename = $image_path . $record->gambar;
            if(unlink($filename)){
                // jika menghapus foto yang ada di folder gambar berhasil maka hapus data di database
                $where = array('id_berita' => $id_berita);
                $this->m_data->hapus_berita($where,'berita');
                redirect('berita/arsip_berita');
            }
        }
    }

    public function edit_berita($id_berita){
        $where = array('id_berita' => $id_berita );
        $data['edit_berita'] = $this->m_data->edit_berita($where,'berita')->result();
        $this->load->view('template/admin_header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/edit_berita',$data);
        $this->load->view('template/admin_footer');
    }

    public function edit_berita_proses(){
        $this->form_validation->set_rules('judul','judul ','required');
        $this->form_validation->set_rules('isi','isi','required');
 
        if($this->form_validation->run() != false){
 
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            $new_name = time().$_FILES["gambar"]['name'];
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config);
 
            if(empty($_FILES['gambar']['name'])){
                $id_berita = $this->input->post('id_berita');
                $judul = $this->input->post('judul');
                $isi = $this->input->post('isi');
                $data = array(
                    'judul' => $judul,
                    'isi' => $isi
                    );
                $where = array(
                    'id_berita' => $id_berita
                    );
 
                $this->m_data->edit_berita_proses($where,$data,'berita');
                redirect('berita/arsip_berita');
            } else {
 
                if ( ! $this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                // $this->load->view('karyawan/datakaryawan', $error);
                } else {
                    $id_berita = $this->input->post('id_berita');
                    $judul = $this->input->post('judul');
                    $isi = $this->input->post('isi');
                    $data = array('upload_data' => $this->upload->data());
                    print_r($this->upload->data());
                    $datafoto=$this->upload->data();
                    $nm_file = $datafoto['orig_name'];
                    $data = array(
                        'gambar' => $nm_file,
                        'judul' => $judul,
                        'isi' => $isi
                        );
                    $where = array(
                        'id_berita' => $id_berita
                        );
                    $image_path = './gambar/';
                    $query_get_image = $this->db->get_where('berita', array('id_berita' => $id_berita));
                    foreach ($query_get_image->result() as $record)
                    {
                    // delete file, if exists...
                        $filename = $image_path . $record->gambar;
                        unlink($filename);
                    }
                    $this->m_data->edit_berita_proses($where,$data,'berita');
                    redirect('berita/arsip_berita');
                }
            }
        }
    }

    public function berita()
    {
        $data['berita'] = $this->m_data->arsip_berita('berita');
        $this->load->view('berita',$data);
        $this->load->view('template/footer');
    }

}