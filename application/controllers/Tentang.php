<?php
class Tentang extends CI_Controller {

        public function index()
        {       
                $data['title_bar'] = "Application";
                $data['folder'] = "";
                $data['active'] = "Tentang";
                $data['page_title'] = "Page Title";
                $data['query'] = "";
                $data['content'] = "tentang";
                $data['this_page_plugin'] = "";
                $this->parser->parse('template', $data);
        }
}