<?php
class Permohonan extends CI_Controller {
    
    public function __construct()
    {
            parent::__construct();
            $this->load->model('kp_permohonan_model');
            $this->load->model('log_aktifitas_model');
            date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
            if ($this->session->userdata('hak_akses') == 'Ketua Jurusan' | $this->session->userdata('hak_akses') == 'Sekretaris Jurusan') {
                $data['title_bar'] = "Application";
                $data['active'] = "Permohonan";
                $data['page_title'] = "Permohonan";
                $data['query'] = $this->kp_permohonan_model->get_entries();
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/kp/permohonan";
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
                $data['active'] = "Permohonan";
                $data['page_title'] = "Permohonan";
                $data['query'] = $this->kp_permohonan_model->get_entries();
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/kp/permohonan";
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
                $data['active'] = "Permohonan";
                $data['page_title'] = "Permohonan";
                $data['query'] = $this->kp_permohonan_model->get_entries();
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/kp/permohonan";
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
                $data['active'] = "Permohonan";
                $data['page_title'] = "Permohonan";
                $data['query'] = "";
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/formulir-layanan/kp/permohonan";
                $data['this_page_plugin'] =
                    '
                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/icheck/icheck.min.js"></script>
                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-datepicker.js"></script>        
                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/bootstrap/bootstrap-select.js"></script>        

                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/validationengine/languages/jquery.validationEngine-en.js"></script>
                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/validationengine/jquery.validationEngine.js"></script>        

                        <script type="text/javascript" src="' . base_url() . 'assets/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>  
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
            }
    }
    
    public function detail($id)
    {
            if ($this->session->userdata('hak_akses') == 'Pegawai') {
                $data['title_bar'] = "Application";
                $data['active'] = "Permohonan";
                $data['page_title'] = "Permohonan";
                $data['query'] = $this->kp_permohonan_model->get_where_entries($id);
                $data['activity'] = $this->log_aktifitas_model->get_where_entries();
                $data['content'] = "layanan/kp/detail-permohonan";
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
    
    public function download($id)
    {
        if ($this->session->userdata('hak_akses') == 'Pegawai') {
            $query = $this->kp_permohonan_model->get_where_entries($id);
            $this->load->library('PHPWord');
            $document = $this->phpword->loadTemplate('application/public/word/surat-permohonan-template.docx');
            foreach ($query as $datas) {
                $document->setValue('Value1', $datas->nama_depan . ' ' . $datas->nama_belakang);
                $document->setValue('Value2', $datas->nim);
                $document->setValue('Value3', $datas->semester);
                $document->setValue('Value4', $datas->alamat_mahasiswa);
                $document->setValue('Value5', $datas->kontak_nomor);
                $document->setValue('Value6', $datas->instansi);
                $document->setValue('Value7', $datas->alamat_instansi);
                $document->setValue('Value8', $datas->judul);
                $document->setValue('Value9', $datas->waktu_pelaksanaan);
                $temp_file = tempnam(sys_get_temp_dir(), 'PHPWord');
                $document->save($temp_file);
            }
            header("Content-Disposition: attachment; filename='Surat Permohonan Kerja Praktek-$datas->nim.docx'");
            readfile($temp_file);
            unlink($temp_file);
            $this->kp_permohonan_model->update_status($id,'Sedang');
        } else {
                redirect(base_url() . 'authentication');
        }
    }
    
    public function insert()
    {
            $this->kp_permohonan_model->insert_entry();
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
            redirect(base_url() . 'layanan/kp/permohonan');
    }
    
    public function replace($id)
    {
            if ($this->session->userdata('hak_akses') == 'Pegawai') {
                $this->kp_permohonan_model->update_entry($id);
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
                redirect(base_url() . 'pegawai/layanan/kp/permohonan/' . $id);
            } else {
                redirect(base_url() . 'authentication');
            }
    }
    
    public function delete($id)
    {
            if ($this->session->userdata('hak_akses') == 'Pegawai') {
                $this->kp_permohonan_model->delete_entry($id);
                $this->session->set_flashdata('flash_data',
                    '
                    <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <strong>Satu surat permohonan berhasil dihapus.</strong>
                    </div>
                    '
                );
                redirect(base_url() . 'pegawai/layanan/kp/permohonan');
            } else {
                redirect(base_url() . 'authentication');
            }
    }
}
