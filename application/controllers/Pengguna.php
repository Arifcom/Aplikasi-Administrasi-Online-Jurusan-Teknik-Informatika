<?php
class Pengguna extends CI_Controller {
    
        public function __construct()
        {
                parent::__construct();
                $this->load->model('pengguna_model');
                $this->load->model('log_aktifitas_model');
                date_default_timezone_set('Asia/Jakarta');
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
                    $akun = array(
                        "pengguna_id" => $rowData[0][0],
                        "email" => $rowData[0][1],
                        "password" => md5($rowData[0][0]),
                        "nama_depan" => $rowData[0][2],
                        "nama_belakang" => $rowData[0][3],
                        "hak_akses"=> $rowData[0][4],
                        "date"=> date('Y-m-d'),
                        "time"=> date('H:i:s')
                    );
                    $insert = $this->db->insert("pengguna", $akun);
                }
                delete_files('./application/public/excel/');
                redirect(base_url() . 'administrator/pengguna');
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
                $sheet->setTitle("Daftar Pengguna");
                $file->getDefaultStyle()
                        ->getAlignment()
                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $sheet->setCellValue("A1", "Identitas")
                        ->setCellValue("B1", "Email")
                        ->setCellValue("C1", "Nama Depan")
                        ->setCellValue("D1", "Nama Belakang")
                        ->setCellValue("E1", "Hak Akses");
                $query = $this->pengguna_model->get_entries();
                $i = 2;
                foreach ($query as $datas):
                    $sheet->setCellValue("A" . $i, $datas->pengguna_id)
                            ->setCellValue("B" . $i, $datas->email)
                            ->setCellValue("C" . $i, $datas->nama_depan)
                            ->setCellValue("D" . $i, $datas->nama_belakang)
                            ->setCellValue("E" . $i, $datas->hak_akses);
                    $i++;
                endforeach;
                header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment;filename="Daftar Pengguna.xls"');
                header('Cache-Control: max-age=0');
                $writer = \PHPExcel_IOFactory::createWriter($file, 'Excel5');
                $writer->save('php://output');
                redirect(base_url() . 'administrator/pengguna');
            } else {
                redirect(base_url() . 'authentication');
            }
        }
        
        public function replace($id)
        {
                if ($this->session->userdata('hak_akses') == 'Administrator') {
                    $this->pengguna_model->update_entry($id);
                    redirect(base_url() . 'administrator/pengguna/' . $id);
                } else {
                    redirect(base_url() . 'authentication');
                }
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