<?php

class KP_permohonan_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('kp_permohonan');
        return $query->result();
    }
    
    public function get_where_entries($id) {
        $query = $this->db->get_where('kp_permohonan', array('kp_permohonan_id' => $id));
        return $query->result();
    }
    
    public function insert_entry()
    {
        $data = array(
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'semester'          => $this->input->post('semester'),
            'alamat_mahasiswa'            => $this->input->post('alamat_mahasiswa'),
            'kontak_nomor'      => $this->input->post('kontak_nomor'),
            'instansi'      => $this->input->post('instansi'),
            'alamat_instansi'      => $this->input->post('alamat_instansi'),
            'judul'      => $this->input->post('judul'),
            'waktu_pelaksanaan'      => $this->input->post('waktu_pelaksanaan'),
            'status'            => 'Belum',
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('kp_permohonan', $data);
    }
    
    public function delete_entry($id) {
        $this->db->delete('kp_permohonan', array('kp_permohonan_id' => $id));
    }
}
