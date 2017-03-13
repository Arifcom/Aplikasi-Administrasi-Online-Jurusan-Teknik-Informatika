<?php

class Surat_keterangan_beasiswa_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('surat_keterangan_beasiswa');
        return $query->result();
    }
    
    public function get_where_entries($id) {
        $query = $this->db->get_where('surat_keterangan_beasiswa', array('surat_keterangan_beasiswa_id' => $id));
        return $query->result();
    }
    
    public function insert_entry()
    {
        $data = array(
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'semester'          => $this->input->post('semester'),
            'tempat_lahir'      => $this->input->post('tempat_lahir'),
            'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
            'alamat'            => $this->input->post('alamat'),
            'kontak_nomor'      => $this->input->post('kontak_nomor'),
            'status'            => 'Belum',
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('surat_keterangan_beasiswa', $data);
    }
    
    public function update_entry($id)
    {
        $data = array(
            'surat_keterangan_beasiswa_id'   => $id,
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'semester'          => $this->input->post('semester'),
            'tempat_lahir'      => $this->input->post('tempat_lahir'),
            'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
            'alamat'            => $this->input->post('alamat'),
            'kontak_nomor'      => $this->input->post('kontak_nomor'),
            'date'              => $this->input->post('date'),
            'time'              => $this->input->post('time')
        );
        return $this->db->replace('surat_keterangan_beasiswa', $data);
    }
    
    public function update_status($id,$status)
    {
        $this->db->set('status', $status);
        $this->db->where('surat_keterangan_beasiswa_id', $id);
        $this->db->update('surat_keterangan_beasiswa');
    }
    
    public function delete_entry($id) {
        $this->db->delete('surat_keterangan_beasiswa', array('surat_keterangan_beasiswa_id' => $id));
    }
    
}