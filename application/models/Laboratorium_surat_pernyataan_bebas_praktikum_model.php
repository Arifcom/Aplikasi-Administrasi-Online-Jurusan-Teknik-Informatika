<?php

class Laboratorium_surat_pernyataan_bebas_praktikum_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('laboratorium_surat');
        return $query->result();
    }
    
    public function get_where_entries($id) {
        $query = $this->db->get_where('laboratorium_surat', array('laboratorium_surat_id' => $id));
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
    
    public function update_entry($id)
    {
        $data = array(
            'laboratorium_surat_id'   => $id,
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'semester'               => $this->input->post('semester'),
            'kontak_nomor'               => $this->input->post('kontak_nomor'),
            'file'            => $this->input->post('file'),
            'status'            => $this->input->post('status'),
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->replace('laboratorium_surat', $data);
    }
    
    public function delete_entry($id) {
        $this->db->delete('laboratorium_surat', array('laboratorium_surat_id' => $id));
    }
    
}
