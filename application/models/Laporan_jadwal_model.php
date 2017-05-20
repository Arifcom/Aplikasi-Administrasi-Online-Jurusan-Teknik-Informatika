<?php

class Laporan_jadwal_model extends CI_Model {
    
    public function laporan_status_dosen($id) {
        $data = array(
            'jadwal_id'  => $id,
            'konfirmasi_dosen'  => 'Iya',
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('laporan_jadwal', $data);
    }
        
    public function empty_table() {
        $this->db->empty_table('laporan_jadwal');
    }
    
}