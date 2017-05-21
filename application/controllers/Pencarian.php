<?php
class Pencarian extends CI_Controller {
    
    public function __construct()
    {
            parent::__construct();
            $this->load->model('pencarian_model');
    }
    
    public function index()
    {
        $data['title_bar'] = "Application";
        $data['active'] = "Pencarian";
        $data['page_title'] = "Pencarian";
        $data['query'] = $this->pencarian_model->get_where_entry();
        $data['activity'] = "";
        $data['content'] = "pencarian";
        $data['this_page_plugin'] =
            '
                <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

                <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
            ';
        $this->parser->parse('template', $data);
    }
    
}
