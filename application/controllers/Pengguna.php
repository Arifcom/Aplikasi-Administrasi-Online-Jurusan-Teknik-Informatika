<?php
class Pengguna extends CI_Controller {
    
        public function __construct()
        {
                parent::__construct();
                $this->load->model('pengguna_model');
                $this->load->model('log_aktifitas_model');
        }

        public function index()
        {
                if ($this->session->userdata('hak_akses') == 'Administrator') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Pengguna";
                    $data['page_title'] = "Pengguna";
                    $data['query'] = $this->pengguna_model->get_entries();
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "pengguna/index";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                                     
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
                        ';
                    $data['extra'] = "";
                    $this->parser->parse('template', $data);
                } else {
                    redirect(base_url() . 'authentication');
                }
        }
        
        public function detail($id)
        {
                if ($this->session->userdata('hak_akses') == 'Administrator') {
                    $data['title_bar'] = "Application";
                    $data['folder'] = "Layanan";
                    $data['active'] = "Pengguna";
                    $data['page_title'] = "Pengguna";
                    $data['query'] = $this->pengguna_model->get_where_entry($id);
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "pengguna/detail-pengguna";
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
                                            tempat_lahir: {
                                                    required: true
                                            },
                                            tanggal_lahir: {
                                                    required: true
                                            },
                                            alamat: {
                                                    required: true
                                            },
                                            kontak_nomor: {
                                                    required: true
                                            }
                                        }                                        
                                    });                                    
                            </script>
                        ';
                    $this->parser->parse('template', $data);
                } else {
                    redirect(base_url() . 'authentication');
                }
        }
        
        public function create()
        {
                if ($this->session->userdata('hak_akses') == 'Administrator') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Pengguna";
                    $data['page_title'] = "Tambah Pengguna";
                    $data['query'] = "";
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "pengguna/tambah";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                                
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
                                            nip: {
                                                    required: true
                                            },
                                            email: {
                                                    required: true
                                            },
                                            password: {
                                                    required: true
                                            },
                                            confirm_password: {
                                                    required: true,
                                                    equalTo: "#password"
                                            }
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
                $this->pengguna_model->insert_entry();
                redirect(base_url() . 'administrator/pengguna');
        }
        
        public function delete($id)
        {
                if ($this->session->userdata('hak_akses') == 'Administrator') {
                    $this->pengguna_model->delete_entry($id);
                    redirect(base_url() . 'administrator/pengguna');
                } else {
                    redirect(base_url() . 'authentication');
                }
        }
}