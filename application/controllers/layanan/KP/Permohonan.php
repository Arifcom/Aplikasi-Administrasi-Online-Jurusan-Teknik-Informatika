<?php
class Permohonan extends CI_Controller {
    
    public function __construct()
    {
            parent::__construct();
            $this->load->model('kp_permohonan_model');
            $this->load->model('log_aktifitas_model');
            date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
            if ($this->session->userdata('hak_akses') == 'Ketua Jurusan') {
                $data['title_bar'] = "Application";
                $data['active'] = "Permohonan KP";
                $data['page_title'] = "Permohonan KP";
                $data['query'] = "";
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/kp/permohonan";
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
                $data['active'] = "Permohonan KP";
                $data['page_title'] = "Permohonan KP";
                $data['query'] = "";
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/kp/permohonan";
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
                $data['active'] = "Permohonan KP";
                $data['page_title'] = "Permohonan KP";
                $data['query'] = "";
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/formulir-layanan/kp/permohonan";
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
                                        semester: {
                                                required: true,
                                                maxlength: 11
                                        },
                                        alamat: {
                                                required: true,
                                                maxlength: 11
                                        },
                                        kontak: {
                                                required: true,
                                                maxlength: 11
                                        },
                                        judul: {
                                                required: true,
                                                maxlength: 11
                                        },
                                        waktu: {
                                                required: true,
                                                maxlength: 11
                                        },
                                    }                                        
                                });                                    
                        </script>
                    ';
                $this->parser->parse('template', $data);
            }
    }
}
