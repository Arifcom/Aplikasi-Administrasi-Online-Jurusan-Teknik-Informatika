<?php
class SuratKeteranganBeasiswa extends CI_Controller {
    
        public function __construct()
        {
                parent::__construct();
                $this->load->model('surat_keterangan_beasiswa_model');
                $this->load->model('log_aktifitas_model');
                date_default_timezone_set('Asia/Jakarta');
        }

        public function index()
        {
                if ($this->session->userdata('hak_akses') == 'Ketua Jurusan') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Surat Keterangan Beasiswa";
                    $data['page_title'] = "Surat Keterangan Beasiswa";
                    $data['query'] = $this->surat_keterangan_beasiswa_model->get_entries();
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/lainnya/surat-keterangan-beasiswa";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                                
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
                        ';
                    $data['extra'] = "";
                    $this->parser->parse('template', $data);
                } else if ($this->session->userdata('hak_akses') == 'Sekretaris Jurusan') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Surat Keterangan Beasiswa";
                    $data['page_title'] = "Page Title";
                    $data['query'] = $this->surat_keterangan_beasiswa_model->get_entries();
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/lainnya/surat-keterangan-beasiswa";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                                
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
                        ';
                    $data['extra'] = "";
                    $this->parser->parse('template', $data);
                } else if ($this->session->userdata('hak_akses') == 'Pegawai') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Surat Keterangan Beasiswa";
                    $data['page_title'] = "Surat Keterangan Beasiswa";
                    $data['query'] = $this->surat_keterangan_beasiswa_model->get_entries();
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/lainnya/surat-keterangan-beasiswa";
                    $data['this_page_plugin'] =
                        '
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                                
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
                        ';
                    $data['extra'] = "";
                    $this->parser->parse('template', $data);
                } else {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Surat Keterangan Beasiswa";
                    $data['page_title'] = "Surat Keterangan Beasiswa";
                    $data['query'] = "";
                    $data['content'] = "layanan/formulir-layanan/lainnya/surat-keterangan-beasiswa";
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
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
                }
        }
        
        public function detail($id)
        {
                if ($this->session->userdata('hak_akses') == 'Pegawai') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Surat Keterangan Beasiswa";
                    $data['page_title'] = "Surat Keterangan Beasiswa";
                    $data['query'] = $this->surat_keterangan_beasiswa_model->get_where_entries($id);
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/lainnya/detail-surat-keterangan-beasiswa";
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
        
        public function download($id)
        {
            if ($this->session->userdata('hak_akses') == 'Pegawai') {
                $query = $this->surat_keterangan_beasiswa_model->get_where_entries($id);
                $this->load->library('PHPWord');
                $document = $this->phpword->loadTemplate('application/public/word/surat-keterangan-beasiswa-template.docx');
                foreach ($query as $datas) {
                    $document->setValue('Value1', $datas->nama_depan . ' ' . $datas->nama_belakang);
                    $document->setValue('Value2', $datas->nim);
                    $document->setValue('Value3', $datas->tempat_lahir);
                    $document->setValue('Value4', $datas->tanggal_lahir);
                    $document->setValue('Value5', $datas->semester);
                    $document->setValue('Value6', $datas->alamat);
                    $document->setValue('Value7', 'Tahun Ajaran');
                    $temp_file = tempnam(sys_get_temp_dir(), 'PHPWord');
                    $document->save($temp_file);
                }
                header("Content-Disposition: attachment; filename='Surat Keterangan Beasiswa-$datas->nim.docx'");
                readfile($temp_file);
                unlink($temp_file);
            } else {
                    redirect(base_url() . 'authentication');
            }
        }
        
        public function insert()
        {
                $this->surat_keterangan_beasiswa_model->insert_entry();
                $this->session->set_flashdata('flash_data',
                        '
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                        <div class="alert alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Surat permohonan Anda berhasil disimpan dan akan segera diproses.</strong>
                        </div>
                        </div>
                        <div class="col-md-3"></div>
                        '
                );
                redirect(base_url() . 'layanan/lainnya/surat-keterangan-beasiswa');
        }
        
        public function replace($id)
        {
                if ($this->session->userdata('hak_akses') == 'Pegawai') {
                    $this->surat_keterangan_beasiswa_model->update_entry($id);
                    $this->session->set_flashdata('flash_data',
                        '
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                        <div class="alert alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Surat permohonan berhasil disimpan.</strong>
                        </div>
                        </div>
                        <div class="col-md-3"></div>
                        '
                    );
                    redirect(base_url() . 'pegawai/layanan/lainnya/surat-keterangan-beasiswa/' . $id);
                } else {
                    redirect(base_url() . 'authentication');
                }
        }
        
        public function delete($id)
        {
                if ($this->session->userdata('hak_akses') == 'Pegawai') {
                    $this->surat_keterangan_beasiswa_model->delete_entry($id);
                    $this->session->set_flashdata('flash_data',
                        '
                        <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Satu surat permohonan berhasil dihapus.</strong>
                        </div>
                        '
                    );
                    redirect(base_url() . 'pegawai/layanan/lainnya/surat-keterangan-beasiswa');
                } else {
                    redirect(base_url() . 'authentication');
                }
        }
}