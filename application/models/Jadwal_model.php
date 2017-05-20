<?php

class Jadwal_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('jadwal');
        return $query->result();
    }
    
    public function empty_table() {
        $this->db->empty_table('jadwal');
    }
    
}