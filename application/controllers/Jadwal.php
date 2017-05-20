<?php
class Jadwal extends CI_Controller {
    
    public function __construct()
    {
            parent::__construct();
            $this->load->model('log_aktifitas_model');
            date_default_timezone_set('Asia/Jakarta');
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

                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
                        ';
                    $this->parser->parse('template', $data);
                } else {
                    redirect('authentication');
                }
        }
        
        public function impor() {
            if ($this->session->userdata('hak_akses') == 'Administrator') {
                $this->load->library('PHPExcel');
                $config['upload_path'] = './application/public/excel/';
                $config['file_name'] = $_FILES['file']['name'];
                $config['allowed_types'] = 'xls|xlsx|csv';
                $config['max_size'] = 1000000;
                $this->load->library('upload', $config);
                $this->upload->do_upload('file');
                $file_name = './application/public/excel/' . $this->upload->data('file_name');
                try {
                    $file_type = PHPExcel_IOFactory::identify($file_name);
                    $object_reader = PHPExcel_IOFactory::createReader($file_type);
                    $object_PHPExcel = $object_reader->load($file_name);
                } catch (Exception $e) {
                    die('Gagal mengupload file "' . pathinfo($file_name, PATHINFO_BASENAME) . '": ' . $e->getMessage());
                }
                $sheet = $object_PHPExcel->getSheet(0);
                $highest_row = $sheet->getHighestDataRow();
                $highest_column = $sheet->getHighestDataColumn();
                for ($row = 2; $row <= $highest_row; $row++) {
                    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highest_column . $row, NULL, TRUE, FALSE);
                    $datas = array(
                        "mata_kuliah" => $rowData[0][0],
                        "kelas" => $rowData[0][1],
                        "dosen" => $rowData[0][2],
                        "hari" => $rowData[0][3],
                        "jam" => $rowData[0][4],
                        "ruangan"=> $rowData[0][5],
                        "date"=> date('Y-m-d'),
                        "time"=> date('H:i:s')
                    );
                    $insert = $this->db->insert("jadwal", $datas);
                }
                delete_files('./application/public/excel/');
                redirect(base_url() . 'administrator/jadwal');
            } else {
                redirect(base_url() . 'beranda');
            }
        }
        
}
