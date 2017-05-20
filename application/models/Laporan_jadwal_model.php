<?php

class Laporan_jadwal_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('laporan_jadwal');
        return $query->result();
    }
    
    public function get_laporan() {
        $query = $this->db->query("SELECT a.hari, a.jam, a.mata_kuliah, a.kelas, a.dosen, a.ruangan, b.konfirmasi_dosen, b.konfirmasi_ketua_kelas, b.date FROM jadwal AS a, laporan_jadwal AS b WHERE a.jadwal_id = b.jadwal_id");
        return $query->result();
    }
    
    public function laporan_status_dosen($id) {
        $query = $this->db->get_where('laporan_jadwal', array('jadwal_id' => $id, 'date' => date('Y-m-d')));
        if ($query->num_rows() < 1) {
            $data = array(
                'jadwal_id'  => $id,
                'konfirmasi_dosen'  => 'Iya',
                'date'              => date('Y-m-d'),
                'time'              => date('H:i:s')
            );
            return $this->db->insert('laporan_jadwal', $data);
        } else {
            $this->db->set('konfirmasi_dosen', 'Iya');
            $this->db->where('jadwal_id', $id);
            $this->db->where('date', date('Y-m-d'));
            return $this->db->update('laporan_jadwal');
        }
    }
    
    public function laporan_status_ketua_kelas($id) {
        $query = $this->db->get_where('laporan_jadwal', array('jadwal_id' => $id, 'date' => date('Y-m-d')));
        if ($query->num_rows() < 1) {
            $data = array(
                'jadwal_id'  => $id,
                'konfirmasi_ketua_kelas'  => 'Iya',
                'date'              => date('Y-m-d'),
                'time'              => date('H:i:s')
            );
            return $this->db->insert('laporan_jadwal', $data);
        } else {
            $this->db->set('konfirmasi_ketua_kelas', 'Iya');
            $this->db->where('jadwal_id', $id);
            $this->db->where('date', date('Y-m-d'));
            return $this->db->update('laporan_jadwal');
        }
    }
        
    public function empty_table() {
        $this->db->empty_table('laporan_jadwal');
    }
    
}