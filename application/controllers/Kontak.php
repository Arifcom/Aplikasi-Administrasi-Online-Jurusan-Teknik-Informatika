<?php
class Kontak extends CI_Controller {

        public function index()
        {       
                $data['title_bar'] = "Application";
                $data['folder'] = "";
                $data['active'] = "Kontak";
                $data['page_title'] = "Page Title";
                $data['query'] = "";
                $data['content'] = "kontak";
                $data['this_page_plugin'] = "";
                $this->parser->parse('template', $data);
        }
}