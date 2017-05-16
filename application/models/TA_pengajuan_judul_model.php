<?php

class TA_pengajuan_judul_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('ta_pengajuan_judul');
        return $query->result();
    }
    
    public function get_where_entries($id) {
        $query = $this->db->get_where('ta_pengajuan_judul', array('ta_pengajuan_judul_id' => $id));
        return $query->result();
    }
    
    public function get_where_calon_pembimbing($nama) {
        $query = $this->db->get_where('ta_pengajuan_judul', array('calon_pembimbing' => $nama));
        return $query->result();
    }
    
    public function get_where_status_calon_pembimbing($status) {
        $query = $this->db->get_where('ta_pengajuan_judul', array('status_calon_pembimbing' => $status));
        return $query->result();
    }
    
    public function insert_entry()
    {
        $data = array(
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'email'             => $this->input->post('email'),
            'judul'             => $this->input->post('judul'),
            'calon_pembimbing'  => $this->input->post('calon_pembimbing'),
            'status_calon_pembimbing'  => 'Ditolak',
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('ta_pengajuan_judul', $data);
    }
    
    public function update_entry($id)
    {
        $data = array(
            'surat_keterangan_aktif_kuliah_id'      => $id,
            'nama_depan'                            => $this->input->post('nama_depan'),
            'nama_belakang'                         => $this->input->post('nama_belakang'),
            'nim'                                   => $this->input->post('nim'),
            'email'                                 => $this->input->post('email'),
            'judul'                                 => $this->input->post('judul'),
            'calon_pembimbing'                      => $this->input->post('calon_pembimbing'),
            'date'                                  => $this->input->post('date'),
            'time'                                  => $this->input->post('time')
        );
        return $this->db->replace('ta_pengajuan_judul', $data);
    }
    
    public function update_status($id)
    {
        $this->db->set('status', $this->input->post('status'));
        $this->db->set('komentar', $this->input->post('komentar'));
        $this->db->where('ta_pengajuan_judul_id', $id);
        $this->db->update('ta_pengajuan_judul');
    }
    
    public function update_status_calon_pembimbing($id)
    {
        $this->db->set('status_calon_pembimbing', $this->input->post('status_calon_pembimbing'));
        $this->db->where('ta_pengajuan_judul_id', $id);
        $this->db->update('ta_pengajuan_judul');
    }
    
    public function delete_entry($id) {
        $this->db->delete('ta_pengajuan_judul', array('ta_pengajuan_judul_id' => $id));
    }
    
}