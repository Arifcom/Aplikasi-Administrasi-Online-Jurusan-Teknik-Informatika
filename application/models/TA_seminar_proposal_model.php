<?php

class TA_seminar_proposal_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('ta_seminar_proposal');
        return $query->result();
    }
    
    public function get_where_entries($id) {
        $query = $this->db->get_where('ta_seminar_proposal', array('ta_seminar_proposal_id' => $id));
        return $query->result();
    }
    
    public function insert_entry()
    {
        $result = $this->upload->data();
        $data = array(
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'judul'             => $this->input->post('judul'),
            'pembimbing_1'      => $this->input->post('pembimbing_1'),
            'pembimbing_2'      => $this->input->post('pembimbing_2'),
            'penguji_1'      => $this->input->post('penguji_1'),
            'penguji_2'      => $this->input->post('penguji_2'),
            'tanggal_seminar'      => $this->input->post('tanggal_seminar'),
            'waktu_seminar'      => $this->input->post('waktu_seminar'),
            'tempat_seminar'      => $this->input->post('tempat_seminar'),
            'gambar'            => $result['file_name'],
            'status'            => 'Belum',
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('ta_seminar_proposal', $data);
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
            'tanggal_seminar'      => $this->input->post('tanggal_seminar'),
            'waktu_seminar'      => $this->input->post('waktu_seminar'),
            'tempat_seminar'      => $this->input->post('tempat_seminar'),
            'gambar'            => $this->input->post('gambar'),
            'status'            => $this->input->post('status'),
            'date'              => $this->input->post('date'),
            'time'              => $this->input->post('time')
        );
        return $this->db->replace('ta_seminar_proposal', $data);
    }
    
    public function update_status($id,$status)
    {
        $this->db->set('status', $status);
        $this->db->where('ta_seminar_proposal_id', $id);
        $this->db->update('ta_seminar_proposal');
    }
    
    public function delete_entry($id) {
        $this->db->delete('ta_seminar_proposal', array('ta_seminar_proposal_id' => $id));
    }
    
}