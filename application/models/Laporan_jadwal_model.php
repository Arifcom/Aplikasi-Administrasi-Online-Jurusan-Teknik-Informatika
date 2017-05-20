<?php

class Laporan_jadwal_model extends CI_Model {
        
    public function empty_table() {
        $this->db->empty_table('laporan_jadwal');
    }
    
}