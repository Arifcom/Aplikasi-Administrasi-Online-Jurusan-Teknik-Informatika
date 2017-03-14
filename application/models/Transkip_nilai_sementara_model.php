<?php

class Transkip_nilai_sementara_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('transkip_nilai_sementara');
        return $query->result();
    }
    
    public function get_where_entries($id) {
        $query = $this->db->get_where('transkip_nilai_sementara', array('transkip_nilai_sementara_id' => $id));
        return $query->result();
    }
    
    public function insert_entry()
    {
        $data = array(
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'semester'          => $this->input->post('semester'),
            'kontak_nomor'      => $this->input->post('kontak_nomor'),
            'status'            => 'Belum',
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('transkip_nilai_sementara', $data);
    }
    
    public function update_entry($id)
    {
        $data = array(
            'transkip_nilai_sementara_id'   => $id,
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'semester'          => $this->input->post('semester'),
            'kontak_nomor'      => $this->input->post('kontak_nomor'),
            'date'              => $this->input->post('date'),
            'time'              => $this->input->post('time')
        );
        return $this->db->replace('transkip_nilai_sementara', $data);
    }
    
     public function delete_entry($id) {
        $this->db->delete('transkip_nilai_sementara', array('transkip_nilai_sementara_id' => $id));
    }
    
}