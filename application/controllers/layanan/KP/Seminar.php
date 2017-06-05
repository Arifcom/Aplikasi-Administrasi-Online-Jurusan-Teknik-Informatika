<?php
class Seminar extends CI_Controller {
    
    public function __construct()
    {
            parent::__construct();
            $this->load->model('kp_seminar_model');
            $this->load->model('log_aktifitas_model');
            date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
            if ($this->session->userdata('hak_akses') == 'Ketua Jurusan' | $this->session->userdata('hak_akses') == 'Sekretaris Jurusan') {
                $data['title_bar'] = "Application";
                $data['active'] = "Seminar";
                $data['page_title'] = "Seminar";
                $data['query'] = $this->kp_seminar_model->get_entries();
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/kp/seminar";
                $data['this_page_plugin'] =
                    '
                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
                    ';
                $data['extra'] = "";
                $this->parser->parse('template', $data);
            } else if ($this->session->userdata('hak_akses') == 'Koordinator KP') {
                $data['title_bar'] = "Application";
                $data['active'] = "Seminar";
                $data['page_title'] = "Seminar";
                $data['query'] = $this->kp_seminar_model->get_entries();
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/kp/seminar";
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
                $data['active'] = "Seminar";
                $data['page_title'] = "Seminar";
                $data['query'] = $this->kp_seminar_model->get_entries();
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/kp/seminar";
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
                $data['active'] = "Seminar";
                $data['page_title'] = "Seminar";
                $data['query'] = "";
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/formulir-layanan/kp/seminar";
                $data['this_page_plugin'] =
                    '
                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                                
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-datepicker.js"></script>     
                            <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
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
                                        judul: {
                                                required: true
                                        },
                                        instansi: {
                                                required: true
                                        },
                                        waktu_pelaksanaan: {
                                                required: true
                                        },
                                        pembimbing: {
                                                required: true
                                        },
                                        tanggal_seminar: {
                                                required: true
                                        },
                                        waktu_seminar: {
                                                required: true
                                        },
                                        tempat_seminar: {
                                                required: true
                                        },
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
                $data['active'] = "Seminar";
                $data['page_title'] = "Seminar";
                $data['query'] = $this->kp_seminar_model->get_where_entries($id);
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/kp/detail-seminar";
                $data['this_page_plugin'] =
                    '
                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-datepicker.js"></script>  
                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
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
                                            judul: {
                                                    required: true
                                            },
                                            instansi: {
                                                    required: true
                                            },
                                            waktu_pelaksanaan: {
                                                    required: true
                                            },
                                            pembimbing: {
                                                    required: true
                                            },
                                            tanggal_seminar: {
                                                    required: true
                                            },
                                            waktu_seminar: {
                                                    required: true
                                            },
                                            tempat_seminar: {
                                                    required: true
                                            },
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
            $config['upload_path'] = './assets/images/mahasiswa/ktm/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('gambar'))
            {
                    $this->session->set_flashdata('flash_data',
                            '
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                            <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <strong>Gagal mengupload foto scan ktm.</strong>
                            </div>
                            </div>
                            <div class="col-md-3"></div>
                            '
                    );
            }
            else
            {
                    $this->kp_seminar_model->insert_entry();
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
            }
            redirect(base_url() . 'layanan/kp/seminar');
    }
    
    public function download($id)
    {
        if ($this->session->userdata('hak_akses') == 'Pegawai') {
            $query = $this->kp_seminar_model->get_where_entries($id);
            $this->load->library('PHPWord');
            $document = $this->phpword->loadTemplate('application/public/word/surat-seminar-template.docx');
            foreach ($query as $datas) {
                $document->setValue('Value1', $datas->pembimbing);
                $document->setValue('Value2', $datas->nama_depan . ' ' . $datas->nama_belakang);
                $document->setValue('Value3', $datas->nim);
                $document->setValue('Value4', $datas->judul);
                $document->setValue('Value5', $datas->instansi);
                $document->setValue('Value6', $datas->tanggal_seminar);
                $document->setValue('Value7', $datas->waktu_seminar);
                $document->setValue('Value8', $datas->tempat_seminar);
                $temp_file = tempnam(sys_get_temp_dir(), 'PHPWord');
                $document->save($temp_file);
            }
            header("Content-Disposition: attachment; filename='Surat Seminar Kerja Praktek-$datas->nim.docx'");
            readfile($temp_file);
            unlink($temp_file);
            $this->kp_seminar_model->update_status($id,'Sedang');
        } else {
                redirect(base_url() . 'authentication');
        }
    }
    
    public function replace($id)
    {
            if ($this->session->userdata('hak_akses') == 'Pegawai') {
                $this->kp_seminar_model->update_entry($id);
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
                redirect(base_url() . 'pegawai/layanan/kp/seminar/' . $id);
            } else {
                redirect(base_url() . 'authentication');
            }
    }
    
    public function delete($id)
    {
            if ($this->session->userdata('hak_akses') == 'Pegawai') {
                $this->kp_seminar_model->delete_entry($id);
                $this->session->set_flashdata('flash_data',
                    '
                    <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <strong>Satu surat permohonan berhasil dihapus.</strong>
                    </div>
                    '
                );
                redirect(base_url() . 'pegawai/layanan/kp/seminar');
            } else {
                redirect(base_url() . 'authentication');
            }
    }
}
