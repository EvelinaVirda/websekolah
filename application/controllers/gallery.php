<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function index()
	{
        $data['photo'] = $this->m_data->tampil_photo('gallery');
        $this->load->view('gallery',$data);
        $this->load->view('template/footer');
	}

	public function admin_gallery()
	{
        $data['photo'] = $this->m_data->tampil_photo('gallery');
		$this->load->view('template/admin_header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/gallery',$data);
        $this->load->view('template/admin_footer');
	}

	public function input_photo(){

        //jika form tidak ada yang kosong jalankan perintah dibawah
        if($this->form_validation->run() != true){
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
            $data = array('upload_data' => $this->upload->data());
            print_r($this->upload->data());
            $datafoto=$this->upload->data();
            $nm_file = $datafoto['orig_name'];
            $data = array(
                'photo' => $nm_file
                );
            $this->m_data->input_photo($data,'gallery');
            redirect('gallery/admin_gallery');
        }
    } else{
       	$this->load->view('template/admin_header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/gallery');
        $this->load->view('template/admin_footer');
          }
    }

    public function hapus_photo($id_gallery){
        // query untuk memilih data karyawan berdasarkan id karyawan
        $image_path = './gambar/';
        $query_get_image = $this->db->get_where('gallery', array('id_gallery' => $id_gallery));
        foreach ($query_get_image->result() as $record)
        {
        // $filename adalah variabel untuk menyimpan path gambar + nama gambar
            $filename = $image_path . $record->photo;
            if(unlink($filename)){
                // jika menghapus foto yang ada di folder gambar berhasil maka hapus data di database
                $where = array('id_gallery' => $id_gallery);
                $this->m_data->hapus_photo($where,'gallery');
                redirect('gallery/admin_gallery');
            }
        }
    }
}