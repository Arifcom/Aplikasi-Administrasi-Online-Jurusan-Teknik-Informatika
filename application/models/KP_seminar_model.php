<?php

class KP_seminar_model extends CI_Model {
    
    public function get_entries() {
        $query = $this->db->get('kp_seminar');
        return $query->result();
    }
    
    public function get_where_entries($id) {
        $query = $this->db->get_where('kp_seminar', array('kp_seminar_id' => $id));
        return $query->result();
    }
    
    public function insert_entry()
    {
        $result = $this->upload->data();
        $data = array(
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'judul'               => $this->input->post('judul'),
            'instansi'            => $this->input->post('instansi'),
            'waktu_pelaksanaan'            => $this->input->post('waktu_pelaksanaan'),
            'pembimbing'            => $this->input->post('pembimbing'),
            'tanggal_seminar'            => $this->input->post('tanggal_seminar'),
            'waktu_seminar'            => $this->input->post('waktu_seminar'),
            'tempat_seminar'            => $this->input->post('tempat_seminar'),
            'gambar'            => $result['file_name'],
            'status'            => 'Belum',
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->insert('kp_seminar', $data);
    }
    
    public function update_entry($id)
    {
        $data = array(
            'kp_seminar_id'   => $id,
            'nama_depan'        => $this->input->post('nama_depan'),
            'nama_belakang'     => $this->input->post('nama_belakang'),
            'nim'               => $this->input->post('nim'),
            'judul'               => $this->input->post('judul'),
            'instansi'            => $this->input->post('instansi'),
            'waktu_pelaksanaan'            => $this->input->post('waktu_pelaksanaan'),
            'pembimbing'            => $this->input->post('pembimbing'),
            'tanggal_seminar'            => $this->input->post('tanggal_seminar'),
            'waktu_seminar'            => $this->input->post('waktu_seminar'),
            'tempat_seminar'            => $this->input->post('tempat_seminar'),
            'gambar'            => $this->input->post('gambar'),
            'status'            => $this->input->post('status'),
            'date'              => date('Y-m-d'),
            'time'              => date('H:i:s')
        );
        return $this->db->replace('kp_seminar', $data);
    }
    
    public function update_status($id,$status)
    {
        $this->db->set('status', $status);
        $this->db->where('kp_seminar_id', $id);
        $this->db->update('kp_seminar');
    }
    
    public function delete_entry($id) {
        $this->db->delete('kp_seminar', array('kp_seminar_id' => $id));
    }
    
}
