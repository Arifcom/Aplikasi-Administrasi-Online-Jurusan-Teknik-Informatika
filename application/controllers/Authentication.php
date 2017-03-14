<?php
class Authentication extends CI_Controller {
    
        public function __construct()
        {
                parent::__construct();
                $this->load->model('pengguna_model');
                $this->load->model('log_aktifitas_model');
                date_default_timezone_set('Asia/Jakarta');
        }

        public function index()
        {
                $this->load->view('authentication');
        }
        
        public function login()
        {
                $data = array(
                    'email' => $this->input->post('email', TRUE),
                    'password' => md5($this->input->post('password', TRUE))
                );
                $query = $this->pengguna_model->get_where_entry($data);
                if ($query->num_rows() == 1) {
                    foreach ($query->result() as $datas) {
                        $session['id'] = $datas->pengguna_id;
                        $session['email'] = $datas->email;
                        $session['nama'] = $datas->nama_depan . " " . $datas->nama_belakang;
                        $session['hak_akses'] = $datas->hak_akses;
                        $this->session->set_userdata($session);
                    }
                    if ($this->session->userdata('hak_akses') == 'Ketua Jurusan') {
                        $this->log_aktifitas_model->insert_entry("Anda Berhasil Login");
                        redirect(base_url() . 'ketua-jurusan');
                    } else if ($this->session->userdata('hak_akses') == 'Sekretaris Jurusan') {
                        $this->log_aktifitas_model->insert_entry("Anda Berhasil Login");
                        redirect(base_url() . 'sekretaris-jurusan');
                    } else if ($this->session->userdata('hak_akses') == 'Koordinator TA') {
                        $this->log_aktifitas_model->insert_entry("Anda Berhasil Login");
                        redirect(base_url() . 'koordinator-ta');
                    } else if ($this->session->userdata('hak_akses') == 'Koordinator KP') {
                        $this->log_aktifitas_model->insert_entry("Anda Berhasil Login");
                        redirect(base_url() . 'koordinator-kp');
                    } else if ($this->session->userdata('hak_akses') == 'Kepala Laboratorium') {
                        $this->log_aktifitas_model->insert_entry("Anda Berhasil Login");
                        redirect(base_url() . 'kepala-laboratorium');
                    } else if ($this->session->userdata('hak_akses') == 'Dosen') {
                        $this->log_aktifitas_model->insert_entry("Anda Berhasil Login");
                        redirect(base_url() . 'dosen');
                    } else if ($this->session->userdata('hak_akses') == 'Pegawai') {
                        $this->log_aktifitas_model->insert_entry("Anda Berhasil Login");
                        redirect(base_url() . 'pegawai');
                    } else if ($this->session->userdata('hak_akses') == 'Ketua Kelas') {
                        $this->log_aktifitas_model->insert_entry("Anda Berhasil Login");
                        redirect(base_url() . 'ketua-kelas');
                    } else if ($this->session->userdata('hak_akses') == 'Administrator') {
                        $this->log_aktifitas_model->insert_entry("Anda Berhasil Login");
                        redirect(base_url() . 'administrator');
                    }
                } else {
                        $this->session->set_flashdata('flash_data','<h5 style="text-align: center; color: red;">Email atau Password salah</h5>');
                        redirect(base_url() . 'authentication');
                }
        }
        
        public function logout()
        {
                $this->session->unset_userdata('id');
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('hak_akses');
                $this->session->sess_destroy();
                redirect(base_url() . 'authentication');
        }
}