<?php

class Surat_keterangan_berkelakuan_baik_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('surat_keterangan_berkelakuan_baik');
        return $query->result();
    }
    
    public function get_where_entries($id) {
        $query = $this->db->get_where('surat_keterangan_berkelakuan_baik', array('surat_keterangan_berkelakuan_baik_id' => $id));
        return $query->result();
    }
    
    public function insert_entry()
    {
        $result = $this->upload->data();
        $data = array(
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'semester'          => $this->input->post('semester'),
            'tempat_lahir'      => $this->input->post('tempat_lahir'),
            'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
            'alamat'            => $this->input->post('alamat'),
            'kontak_nomor'      => $this->input->post('kontak_nomor'),
            'gambar'            => $result['file_name'],
            'status'            => 'Belum',
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('surat_keterangan_berkelakuan_baik', $data);
    }
    
    public function update_entry($id)
    {
        $data = array(
            'surat_keterangan_berkelakuan_baik_id'   => $id,
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'semester'          => $this->input->post('semester'),
            'tempat_lahir'      => $this->input->post('tempat_lahir'),
            'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
            'alamat'            => $this->input->post('alamat'),
            'kontak_nomor'      => $this->input->post('kontak_nomor'),
            'gambar'            => $this->input->post('gambar'),
            'status'            => $this->input->post('status'),
            'date'              => $this->input->post('date'),
            'time'              => $this->input->post('time')
        );
        return $this->db->replace('surat_keterangan_berkelakuan_baik', $data);
    }
    
    public function update_status($id,$status)
    {
        $this->db->set('status', $status);
        $this->db->where('surat_keterangan_berkelakuan_baik_id', $id);
        $this->db->update('surat_keterangan_berkelakuan_baik');
    }
    
    public function delete_entry($id) {
        $this->db->delete('surat_keterangan_berkelakuan_baik', array('surat_keterangan_berkelakuan_baik_id' => $id));
    }
    
}