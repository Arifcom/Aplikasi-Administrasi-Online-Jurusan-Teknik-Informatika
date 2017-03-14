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
                    $data['page_title'] = "Penganjuan Judul";
                    $data['query'] = $this->pengguna_model->get_where_hak_akses("Dosen");
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
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
}