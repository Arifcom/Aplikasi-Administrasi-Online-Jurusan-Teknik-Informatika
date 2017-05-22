<?php

class KHS_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('khs');
        return $query->result();
    }
    
    public function get_where_entries($id) {
        $query = $this->db->get_where('khs', array('khs_id' => $id));
        return $query->result();
    }
    
    public function insert_entry()
    {
        $result = $this->upload->data();
        $data = array(
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'semester'          => $this->input->post('semester'),
            'kontak_nomor'      => $this->input->post('kontak_nomor'),
            'gambar'            => $result['file_name'],
            'status'            => 'Belum',
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('khs', $data);
    }
    
    public function update_entry($id)
    {
        $data = array(
            'khs_id'   => $id,
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'semester'          => $this->input->post('semester'),
            'kontak_nomor'      => $this->input->post('kontak_nomor'),
            'gambar'            => $this->input->post('gambar'),
            'status'      => $this->input->post('status'),
            'date'              => $this->input->post('date'),
            'time'              => $this->input->post('time')
        );
        return $this->db->replace('khs', $data);
    }
    
     public function delete_entry($id) {
        $this->db->delete('khs', array('khs_id' => $id));
    }
    
}