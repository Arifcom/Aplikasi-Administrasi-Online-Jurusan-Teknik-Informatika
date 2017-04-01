<?php
class PengajuanJudul extends CI_Controller {
    
        public function __construct()
        {
                parent::__construct();
                $this->load->model('ta_pengajuan_judul_model');
                $this->load->model('pengguna_model');
                $this->load->model('log_aktifitas_model');
                date_default_timezone_set('Asia/Jakarta');
        }

        public function index()
        {
                if ($this->session->userdata('hak_akses') == 'Ketua Jurusan') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Pengajuan Judul";
                    $data['page_title'] = "Penganjuan Judul";
                    $data['query'] = $this->ta_pengajuan_judul_model->get_entries();
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/ta/pengajuan-judul";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
                        ';
                    $data['extra'] = "";
                    $data['extra'] = "";
                    $this->parser->parse('template', $data);
                } else if ($this->session->userdata('hak_akses') == 'Koordinator TA') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Pengajuan Judul";
                    $data['page_title'] = "Pengajuan Judul";
                    $data['query'] = $this->ta_pengajuan_judul_model->get_where_status_calon_pembimbing('Diterima');
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/ta/pengajuan-judul";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
                        ';
                    $data['extra'] = "";
                    $this->parser->parse('template', $data);
                } else if ($this->session->userdata('hak_akses') == 'Dosen') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Pengajuan Judul";
                    $data['page_title'] = "Pengajuan Judul";
                    $data['query'] = $this->ta_pengajuan_judul_model->get_where_calon_pembimbing($this->session->userdata('nama'));
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/ta/pengajuan-judul";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
                        ';
                    $data['extra'] = "";
                    $this->parser->parse('template', $data);
                } else if ($this->session->userdata('hak_akses') == 'Pegawai') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Pengajuan Judul";
                    $data['page_title'] = "Pengajuan Judul";
                    $data['query'] = $this->ta_pengajuan_judul_model->get_entries();
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/ta/pengajuan-judul";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
                        ';
                    $data['extra'] = "";
                    $this->parser->parse('template', $data);
                } else {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Pengajuan Judul";
                    $data['page_title'] = "Pengajuan Judul";
                    $data['query'] = "";
                    $data['activity'] = "";
                    $data['content'] = "layanan/formulir-layanan/ta/pengajuan-judul";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                                
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-datepicker.js"></script>        
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-select.js"></script>        

                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/validationengine/languages/jquery.validationEngine-en.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/validationengine/jquery.validationEngine.js"></script>        

                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/jquery-validation/jquery.validate.js"></script>                
                        ';
                    $data['extra'] =
                        '
                            <script type="text/javascript">
                                var jvalidate = $("#jvalidate").validate({
                                    ignore: [],
                                    rules: {                                            
                                            nama_depan: {
                                                    required: true
                                            },
                                            nama_belakang: {
                                                    required: true
                                            },
                                            nim: {
                                                    required: true,
                                                    maxlength: 11
                                            },
                                            email: {
                                                    required: true
                                            },
                                            judul: {
                                                    required: true
                                            },
                                            calon_pembimbing: {
                                                    required: true
                                            }
                                        }                                        
                                    });                                    
                            </script>
                        ';
                    $this->parser->parse('template', $data);
                }
        }
        
        public function detail($id)
        {
                if ($this->session->userdata('hak_akses') == 'Koordinator TA') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Pengajuan Judul";
                    $data['page_title'] = "Pengajuan Judul";
                    $data['query'] = $this->ta_pengajuan_judul_model->get_where_entries($id);
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/ta/detail-pengajuan-judul";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                                
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-datepicker.js"></script>  
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-select.js"></script>        

                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/validationengine/languages/jquery.validationEngine-en.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/validationengine/jquery.validationEngine.js"></script>        

                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/jquery-validation/jquery.validate.js"></script>                
                        ';
                    $data['extra'] =
                        '
                            <script type="text/javascript">
                                var jvalidate = $("#jvalidate").validate({
                                    ignore: [],
                                    rules: {                                            
                                            nama_depan: {
                                                    required: true
                                            },
                                            nama_belakang: {
                                                    required: true
                                            },
                                            nim: {
                                                    required: true,
                                                    maxlength: 11
                                            },
                                            judul: {
                                                    required: true
                                            },
                                            pembimbing_1: {
                                                    required: true
                                            },
                                            pembimbing_2: {
                                                    required: true
                                            },
                                            penguji_1: {
                                                    required: true
                                            },
                                            penguji_2: {
                                                    required: true
                                            },
                                            tanggal_seminar: {
                                                    required: true
                                            },
                                            waktu_seminar: {
                                                    required: true
                                            },
                                            tempat_seminar: {
                                                    required: true
                                            },
                                        }                                        
                                    });                                    
                            </script>
                        ';
                    $this->parser->parse('template', $data);
                } else if($this->session->userdata('hak_akses') == 'Dosen') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Pengajuan Judul";
                    $data['page_title'] = "Pengajuan Judul";
                    $data['query'] = $this->ta_pengajuan_judul_model->get_where_entries($id);
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/ta/detail-pengajuan-judul";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                                
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-datepicker.js"></script>  
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-select.js"></script>        

                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/validationengine/languages/jquery.validationEngine-en.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/validationengine/jquery.validationEngine.js"></script>        

                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/jquery-validation/jquery.validate.js"></script>                
                        ';
                    $data['extra'] =
                        '
                            <script type="text/javascript">
                                var jvalidate = $("#jvalidate").validate({
                                    ignore: [],
                                    rules: {                                            
                                            nama_depan: {
                                                    required: true
                                            },
                                            nama_belakang: {
                                                    required: true
                                            },
                                            nim: {
                                                    required: true,
                                                    maxlength: 11
                                            },
                                            judul: {
                                                    required: true
                                            },
                                            pembimbing_1: {
                                                    required: true
                                            },
                                            pembimbing_2: {
                                                    required: true
                                            },
                                            penguji_1: {
                                                    required: true
                                            },
                                            penguji_2: {
                                                    required: true
                                            },
                                            tanggal_seminar: {
                                                    required: true
                                            },
                                            waktu_seminar: {
                                                    required: true
                                            },
                                            tempat_seminar: {
                                                    required: true
                                            },
                                        }                                        
                                    });                                    
                            </script>
                        ';
                    $this->parser->parse('template', $data);
                } else {
                    redirect(base_url() . 'authentication');
                }
        }
        
        public function insert()
        {
                $this->ta_pengajuan_judul_model->insert_entry();
                $this->session->set_flashdata('flash_data',
                        '
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                        <div class="alert alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Surat permohonan Anda berhasil disimpan dan akan segera diproses.</strong>
                        </div>
                        </div>
                        <div class="col-md-3"></div>
                        '
                );
                redirect(base_url() . 'layanan/ta/pengajuan-judul');
        }
        
        public function replace($id)
        {
                if ($this->session->userdata('hak_akses') == 'Koordinator TA') {
                    $this->ta_pengajuan_judul_model->update_status($id);
                    $config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.googlemail.com',
                        'smtp_port' => 465,
                        'smtp_user' => 'anonymous56381029@gmail.com',
                        'smtp_pass' => 'password56',
                        'mailtype'  => 'text', 
                        'charset'   => 'iso-8859-1'
                    );
                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");

                    $this->email->from('anonymous56381029@gmail.com', 'First Last');
                    $this->email->to('arif.56.budiman@gmail.com');
                    $this->email->subject('Keputusan Koordianator TA');
                    $this->email->message('Pengajuan judul ta Anda ' . $this->input->post('status') . "\r\n" . $this->input->post('komentar'));
                    
                    if($this->email->send()) {
                        $this->session->set_flashdata('flash_data',
                        '
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                        <div class="alert alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Keputusan dan komentar Anda telah terkirim kepada mahasiswa melalui email.</strong>
                        </div>
                        </div>
                        <div class="col-md-3"></div>
                        '
                        );
                    } else {
                        // show_error($this->email->print_debugger());
                        $this->session->set_flashdata('flash_data',
                        '
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                        <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Keputusan dan komentar Anda belum terkirim kepada mahasiswa. Periksa koneksi jaringan internet Anda.</strong>
                        </div>
                        </div>
                        <div class="col-md-3"></div>
                        '
                        );
                    }
                    redirect(base_url() . 'koordinator-ta/layanan/ta/pengajuan-judul/' . $id);
                } else if ($this->session->userdata('hak_akses') == 'Dosen') {
                    $this->ta_pengajuan_judul_model->update_status_calon_pembimbing($id);
                    $config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.googlemail.com',
                        'smtp_port' => 465,
                        'smtp_user' => 'anonymous56381029@gmail.com',
                        'smtp_pass' => 'password56',
                        'mailtype'  => 'text', 
                        'charset'   => 'iso-8859-1'
                    );
                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");

                    $this->email->from('anonymous56381029@gmail.com', 'First Last');
                    $this->email->to('arif.56.budiman@gmail.com');
                    $this->email->subject('Keputusan Calon Pembimbing');
                    $message = "";
                    if ($this->input->post('status_calon_pembimbing') == "Diterima") {
                        $message = $this->session->userdata('nama') . " menerima Anda sebagai mahasiswa bimbingannya.";
                    } else {
                        $message = $this->session->userdata('nama') . " tidak menerima Anda sebagai mahasiswa bimbingannya.";
                    }
                    $this->email->message($message);
                    
                    if($this->email->send()) {
                        $this->session->set_flashdata('flash_data',
                        '
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                        <div class="alert alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Keputusan Anda telah terkirim kepada mahasiswa melalui email.</strong>
                        </div>
                        </div>
                        <div class="col-md-3"></div>
                        '
                        );
                    } else {
                        // show_error($this->email->print_debugger());
                        $this->session->set_flashdata('flash_data',
                        '
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                        <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Keputusan Anda belum terkirim kepada mahasiswa. Periksa koneksi jaringan internet Anda.</strong>
                        </div>
                        </div>
                        <div class="col-md-3"></div>
                        '
                        );
                    }
                    redirect(base_url() . 'dosen/layanan/ta/pengajuan-judul/' . $id);
                } else {
                    redirect(base_url() . 'authentication');
                }
        }    
}