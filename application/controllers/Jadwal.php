<?php
class Jadwal extends CI_Controller {
    
    public function __construct()
    {
            parent::__construct();
            $this->load->model('jadwal_model');
            $this->load->model('laporan_jadwal_model');
            $this->load->model('log_aktifitas_model');
            date_default_timezone_set('Asia/Jakarta');
    }
    
    public function index()
        {
                if ($this->session->userdata('hak_akses') == 'Dosen') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Jadwal";
                    $data['page_title'] = "Jadwal";
                    $data['query'] = $this->jadwal_model->get_where_dosen($this->session->userdata('nama'));
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "jadwal/index";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
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
                    $data['query'] = $this->jadwal_model->get_entries();
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
                    $hari = $rowData[0][3];
                    $kode_hari = 0;
                    if($hari == "Senin") {
                        $kode_hari = 1;
                    } else if($hari == "Selasa") {
                        $kode_hari = 2;
                    } else if($hari == "Rabu") {
                        $kode_hari = 3;
                    } else if($hari == "Kamis") {
                        $kode_hari = 4;
                    } else if($hari == "Jumat") {
                        $kode_hari = 5;
                    } else if($hari == "Sabtu") {
                        $kode_hari = 6;
                    }
                    $datas = array(
                        "mata_kuliah" => $rowData[0][0],
                        "kelas" => $rowData[0][1],
                        "dosen" => $rowData[0][2],
                        "hari" => $rowData[0][3],
                        "kode_hari" => $kode_hari,
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
        
        public function ekspor() {
            if ($this->session->userdata('hak_akses') == 'Administrator') {
                $this->load->library('PHPExcel');
                $file = new PHPExcel ();
                $file->getProperties()->setCreator("Teknik Informatika UIN SUSKA Riau");
                $file->getProperties()->setLastModifiedBy("Teknik Informatika UIN SUSKA Riau");
                $file->createSheet(NULL, 0);
                $file->setActiveSheetIndex(0);
                $sheet = $file->getActiveSheet(0);
                $sheet->setTitle("Daftar Jadwal");
                $file->getDefaultStyle()
                        ->getAlignment()
                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $sheet->setCellValue("A1", "Mata Kuliah")
                        ->setCellValue("B1", "Kelas")
                        ->setCellValue("C1", "Dosen")
                        ->setCellValue("D1", "Hari")
                        ->setCellValue("E1", "Jam")
                        ->setCellValue("F1", "Ruangan");
                $query = $this->jadwal_model->get_entries();
                $i = 2;
                foreach ($query as $datas):
                    $sheet->setCellValue("A" . $i, $datas->mata_kuliah)
                            ->setCellValue("B" . $i, $datas->kelas)
                            ->setCellValue("C" . $i, $datas->dosen)
                            ->setCellValue("D" . $i, $datas->hari)
                            ->setCellValue("E" . $i, $datas->jam)
                            ->setCellValue("F" . $i, $datas->ruangan);
                    $i++;
                endforeach;
                header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment;filename="Daftar Jadwal.xls"');
                header('Cache-Control: max-age=0');
                $writer = \PHPExcel_IOFactory::createWriter($file, 'Excel5');
                $writer->save('php://output');
                redirect(base_url() . 'administrator/jadwal');
            } else {
                redirect(base_url() . 'authentication');
            }
        }
        
        public function reset()
        {
                if ($this->session->userdata('hak_akses') == 'Administrator') {
                    $this->laporan_jadwal_model->empty_table();
                    $this->jadwal_model->empty_table();
                    redirect(base_url() . 'administrator/jadwal');
                } else {
                    redirect(base_url() . 'authentication');
                }
        }
        
}
