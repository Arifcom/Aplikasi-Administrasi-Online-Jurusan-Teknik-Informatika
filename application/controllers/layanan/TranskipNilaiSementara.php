<?php
class TranskipNilaiSementara extends CI_Controller {
    
        public function __construct()
        {
                parent::__construct();
                $this->load->model('transkip_nilai_sementara_model');
                $this->load->model('log_aktifitas_model');
                date_default_timezone_set('Asia/Jakarta');
        }

        public function index()
        {
                if ($this->session->userdata('hak_akses') == 'Ketua Jurusan' | $this->session->userdata('hak_akses') == 'Sekretaris Jurusan') {
                    $data['title_bar'] = "Application";
                    $data['active'] = "Transkip Nilai Sementara";
                    $data['page_title'] = "Page Title";
                    $data['query'] = $this->transkip_nilai_sementara_model->get_entries();
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/transkip-nilai-sementara";
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
                    $data['active'] = "Transkip Nilai Sementara";
                    $data['page_title'] = "Transkip Nilai Sementara";
                    $data['query'] = $this->transkip_nilai_sementara_model->get_entries();
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/transkip-nilai-sementara";
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
                    $data['active'] = "Transkip Nilai Sementara";
                    $data['page_title'] = "Transkip Nilai Sementara";
                    $data['query'] = "";
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/formulir-layanan/transkip-nilai-sementara";
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
                    $data['active'] = "Transkip Nilai Sementara";
                    $data['page_title'] = "Transkip Nilai Sementara";
                    $data['query'] = $this->transkip_nilai_sementara_model->get_where_entries($id);
                    $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                    $data['content'] = "layanan/detail-transkip-nilai-sementara";
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
                        $this->transkip_nilai_sementara_model->insert_entry();
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
                redirect(base_url() . 'layanan/transkip-nilai-sementara');
        }
        
        public function replace($id)
        {
                if ($this->session->userdata('hak_akses') == 'Pegawai') {
                    $this->transkip_nilai_sementara_model->update_entry($id);
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
                    redirect(base_url() . 'pegawai/layanan/transkip-nilai-sementara/' . $id);
                } else {
                    redirect(base_url() . 'authentication');
                }
        }    
        
        public function delete($id)
        {
                if ($this->session->userdata('hak_akses') == 'Pegawai') {
                    $this->transkip_nilai_sementara_model->delete_entry($id);
                    $this->session->set_flashdata('flash_data',
                        '
                        <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Satu surat permohonan berhasil dihapus.</strong>
                        </div>
                        '
                    );
                    redirect(base_url() . 'pegawai/layanan/transkip-nilai-sementara');
                } else {
                    redirect(base_url() . 'authentication');
                }
        }
}