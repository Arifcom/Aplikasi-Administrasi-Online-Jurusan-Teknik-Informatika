<?php

class KP_seminar_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('kp_seminar');
        return $query->result();
    }
    
    public function insert_entry()
    {
        $result = $this->upload->data();
        $data = array(
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'judul'               => $this->input->post('judul'),
            'instansi'            => $this->input->post('instansi'),
            'waktu_pelaksanaan'            => $this->input->post('waktu_pelaksanaan'),
            'pembimbing'            => $this->input->post('pembimbing'),
            'tanggal_seminar'            => $this->input->post('tanggal_seminar'),
            'waktu_seminar'            => $this->input->post('waktu_seminar'),
            'tempat_seminar'            => $this->input->post('tempat_seminar'),
            'gambar'            => $result['file_name'],
            'status'            => 'Belum',
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('kp_seminar', $data);
    }
    
}
