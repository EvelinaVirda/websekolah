<?php

/**
 * 
 */
class M_data extends CI_Model
{

    //  KONTAK
    function proses_kirim_kontak($data,$table)
    {
        $this->db->insert($table,$data);
    }

    function tampil_data_kontak($table)
    {
        $this->db->order_by("id_kontak", "desc");
        $query = $this->db->get($table);
        return $query->result();
    }

    function hapus_pesan($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // PROFILE SEKOLAH

    function profile_sekolah()
    {
        return $this->db->get('profile');
    }

    function update_profile($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }   

    // GALLERY

    function input_photo($data,$table){
        $this->db->insert($table,$data);
    }

    function tampil_photo($table)
    {
        $this->db->order_by("id_gallery", "desc");
        $query = $this->db->get($table);
        return $query->result();
    }

    function hapus_photo($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    // BERITA

    function tambah_berita($data,$table){
        $this->db->insert($table,$data);
    }

    function arsip_berita($table)
    {
        $this->db->order_by("id_berita", "desc");
        $query = $this->db->get($table);
        return $query->result();
    }

    function hapus_berita($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_berita($where,$table){       
        return $this->db->get_where($table,$where);
    }

    function edit_berita_proses($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}