<?php

class Pengguna_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('pengguna');
        return $query->result();
    }
    
    public function get_where_user($data) {
        $query = $this->db->get_where('pengguna', $data);
        return $query;
    }
    
    public function get_where_entry($id) {
        $query = $this->db->get_where('pengguna', array('pengguna_id' => $id));
        return $query->result();
    }
    
    public function get_where_hak_akses($hak_akses) {
        $query = $this->db->get_where('pengguna', array('hak_akses' => $hak_akses));
        return $query->result();
    }
    
    public function insert_entry()
    {
        $data = array(
            'pengguna_id'        => $this->input->post('identitas'),
            'email'        => $this->input->post('email'),
            'password'        =>  md5($this->input->post('password')),
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'hak_akses'        => $this->input->post('hak_akses'),
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('pengguna', $data);
    }
    
    public function update_entry($id)
    {
        $this->db->delete('log_aktifitas', array('pengguna_id' => $id));
        $data = array(
            'pengguna_id'        => $this->input->post('identitas'),
            'email'        => $this->input->post('email'),
            'password'        =>  md5($this->input->post('password')),
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'hak_akses'        => $this->input->post('hak_akses'),
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->replace('pengguna', $data);
    }
    
    public function delete_entry($id) {
        $this->db->delete('log_aktifitas', array('pengguna_id' => $id));
        $this->db->delete('pengguna', array('pengguna_id' => $id));
    }
    
}