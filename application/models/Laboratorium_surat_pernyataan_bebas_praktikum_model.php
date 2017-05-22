<?php

class Laboratorium_surat_pernyataan_bebas_praktikum_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('laboratorium_surat');
        return $query->result();
    }
    
    public function insert_entry()
    {
        $result = $this->upload->data();
        $data = array(
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'semester'               => $this->input->post('semester'),
            'kontak_nomor'               => $this->input->post('kontak_nomor'),
            'file'            => $result['file_name'],
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('laboratorium_surat', $data);
    }
    
}
