<?php

class Pencarian_model extends CI_Model {
    
    public function get_where_entry() {
        $key = $this->input->post('nim');
        $query = $this->db->query("SELECT nim, nama_depan, nama_belakang, status FROM kp_permohonan WHERE nim LIKE '%$key%' UNION ALL SELECT nim, nama_depan, nama_belakang, status FROM kp_seminar WHERE nim LIKE '%$key%' UNION ALL SELECT nim, nama_depan, nama_belakang, status FROM laboratorium_surat WHERE nim LIKE '%$key%' UNION ALL SELECT nim, nama_depan, nama_belakang, status FROM surat_keterangan_aktif_kuliah WHERE nim LIKE '%$key%' UNION ALL SELECT nim, nama_depan, nama_belakang, status FROM surat_keterangan_beasiswa WHERE nim LIKE '%$key%' UNION ALL SELECT nim, nama_depan, nama_belakang, status FROM surat_keterangan_berkelakuan_baik WHERE nim LIKE '%$key%' UNION ALL SELECT nim, nama_depan, nama_belakang, status FROM surat_keterangan_masih_kuliah WHERE nim LIKE '%$key%' UNION ALL SELECT nim, nama_depan, nama_belakang, status FROM ta_pengajuan_judul WHERE nim LIKE '%$key%' UNION ALL SELECT nim, nama_depan, nama_belakang, status FROM ta_seminar_proposal WHERE nim LIKE '%$key%' UNION ALL SELECT nim, nama_depan, nama_belakang, status FROM ta_seminar_hasil WHERE nim LIKE '%$key%' UNION ALL SELECT nim, nama_depan, nama_belakang, status FROM ta_sidang WHERE nim LIKE '%$key%' UNION ALL SELECT nim, nama_depan, nama_belakang, status FROM transkip_nilai_sementara WHERE nim LIKE '%$key%' UNION ALL SELECT nim, nama_depan, nama_belakang, status FROM transkip_nilai_akhir WHERE nim LIKE '%$key%'");
        return $query->result();
    }
    
}