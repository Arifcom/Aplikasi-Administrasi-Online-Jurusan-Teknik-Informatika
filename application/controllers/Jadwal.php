<?php
class Jadwal extends CI_Controller {
    
    public function __construct()
    {
            parent::__construct();
            $this->load->model('log_aktifitas_model');
    }
    
    public function index()
        {
                if ($this->session->userdata('hak_akses') == 'Dosen') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Jadwal";
                    $data['page_title'] = "Jadwal";
                    $data['query'] = "";
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "jadwal/index";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                        ';
                    $this->parser->parse('template', $data);
                } else if ($this->session->userdata('hak_akses') == 'Ketua Kelas') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Jadwal";
                    $data['page_title'] = "Jadwal";
                    $data['query'] = "";
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "jadwal/index";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                        ';
                $this->parser->parse('template', $data);
                } else if ($this->session->userdata('hak_akses') == 'Administrator') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Jadwal";
                    $data['page_title'] = "Jadwal";
                    $data['query'] = "";
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "jadwal/index";
                    $data['this_page_plugin'] =
                        '
                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                        ';
                    $this->parser->parse('template', $data);
                } else {
                    redirect('authentication');
                }
        }
        
}
