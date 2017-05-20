<?php

class Jadwal_model extends CI_Model {
    
    public function get_entries() {
        $this->db->order_by('kode_hari', 'ASC');
        $this->db->order_by('jam', 'ASC');
        $query = $this->db->get('jadwal');
        return $query->result();
    }
    
    public function get_where_dosen($dosen) {
        $this->db->order_by('kode_hari', 'ASC');
        $this->db->order_by('jam', 'ASC');
        $query = $this->db->get_where('jadwal', array('dosen' => $dosen));
        return $query->result();
    }
    
    public function get_where_ketua_kelas($ketua_kelas) {
        $this->db->order_by('kode_hari', 'ASC');
        $this->db->order_by('jam', 'ASC');
        $query = $this->db->get_where('jadwal', array('ketua_kelas'  => $ketua_kelas));
        return $query->result();
    }
    
    public function empty_table() {
        $this->db->empty_table('jadwal');
    }
    
}