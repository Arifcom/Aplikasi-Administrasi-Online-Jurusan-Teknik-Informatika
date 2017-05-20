<?php
class Home extends CI_Controller {

        public function index()
        {       
                $data['title_bar'] = "Application";
                $data['folder'] = "";
                $data['active'] = "Beranda";
                $data['page_title'] = "";
                $data['query'] = "";
                $data['content'] = "home";
                $data['this_page_plugin'] = "";
                $this->parser->parse('template', $data);
        }
}