<?php

class TA_sidang_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('ta_sidang');
        return $query->result();
    }
    
    public function get_where_entries($id) {
        $query = $this->db->get_where('ta_sidang', array('ta_sidang_id' => $id));
        return $query->result();
    }
    
    public function insert_entry()
    {
        $data = array(
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'judul'             => $this->input->post('judul'),
            'pembimbing_1'      => $this->input->post('pembimbing_1'),
            'pembimbing_2'      => $this->input->post('pembimbing_2'),
            'penguji_1'      => $this->input->post('penguji_1'),
            'penguji_2'      => $this->input->post('penguji_2'),
            'tanggal_sidang'      => $this->input->post('tanggal_sidang'),
            'waktu_sidang'      => $this->input->post('waktu_sidang'),
            'tempat_sidang'      => $this->input->post('tempat_sidang'),
            'status'            => 'Belum',
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('ta_sidang', $data);
    }
    
    public function update_entry($id)
    {
        $data = array(
            'surat_keterangan_aktif_kuliah_id'   => $id,
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'judul'             => $this->input->post('judul'),
            'pembimbing_1'      => $this->input->post('pembimbing_1'),
            'pembimbing_2'      => $this->input->post('pembimbing_2'),
            'penguji_1'      => $this->input->post('penguji_1'),
            'penguji_2'      => $this->input->post('penguji_2'),
            'tanggal_sidang'      => $this->input->post('tanggal_sidang'),
            'waktu_sidang'      => $this->input->post('waktu_sidang'),
            'tempat_sidang'      => $this->input->post('tempat_sidang'),
            'date'              => $this->input->post('date'),
            'time'              => $this->input->post('time')
        );
        return $this->db->replace('ta_sidang', $data);
    }
    
     public function delete_entry($id) {
        $this->db->delete('ta_sidang', array('ta_sidang_id' => $id));
    }
    
}