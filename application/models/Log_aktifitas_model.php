<?php

class Log_aktifitas_model extends CI_Model {
    
    public function get_where_entries()
    {
        $query = $this->db->get_where('log_aktifitas', array('pengguna_id' => $this->session->userdata('id')));
        return $query->result();
    }
    
    public function insert_entry($aktifitas)
    {
        $data = array(
            'pengguna_id'       => $this->session->userdata('id'),
            'log_aktifitas'     => $aktifitas,
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('log_aktifitas', $data);
    }
    
}