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
                    $data['content'] = "pengguna";
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
}