<?php

class Pengguna_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('pengguna');
        return $query->result();
    }

    public function get_where_entry($data) {
        $query = $this->db->get_where('pengguna', $data);
        return $query;
    }
    
}