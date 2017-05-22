<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Formulir Permohonan Kerja Praktek</h3>
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <div class="block">
                        <form id="wizard-validation" role="form" class="form-horizontal" action="<?php echo base_url(); ?>layanan/kp/permohonan/insert" method="post">
                            <div class="wizard show-submit wizard-validation">
                                <ul>
                                    <li>
                                        <a href="#step-1">
                                            <span class="stepNumber">1</span>
                                            <span class="stepDesc">Data<br /><small>Mahasiswa</small></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="stepNumber">2</span>
                                            <span class="stepDesc">Data<br /><small>Perusahaan</small></span>
                                        </a>
                                    </li>                                    
                                </ul>

                                <div id="step-1">   

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nama Depan</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nama_depan"/>
                                            <span class="help-block">Isi nama depan</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                       
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nama Belakang</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nama_belakang"/>
                                            <span class="help-block">Isi nama belakang</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                       
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">NIM</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nim"/>
                                            <span class="help-block">Isi NIM</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                       
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Semester</label>  
                                        <div class="col-md-6">
                                            <select class="form-control select" name="semester">
                                                <?php
                                                for ($i = 1; $i < 15; $i++) {
                                                    echo '<option>' . $i . '</option>';
                                                }
                                                ?>
                                            </select>
                                            <span class="help-block">Pilih semester</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                                                                                      
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Alamat</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="alamat_mahasiswa"/>
                                            <span class="help-block">Isi alamat</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                        
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kontak Nomor</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="kontak_nomor"/>
                                            <span class="help-block">Isi kontak nomor</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>

                                </div>

                                <div id="step-2">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Instansi</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="instansi"/>
                                            <span class="help-block">Isi instansi</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Alamat</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="alamat_instansi"/>
                                            <span class="help-block">Isi alamat</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Judul</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="judul"/>
                                            <span class="help-block">Isi judul</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Waktu Pelaksanaan</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="waktu_pelaksanaan"/>
                                            <span class="help-block">Isi waktu pelaksanaan</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>                                                                                                            
                            </div>                                      
                        </form>
                        <!-- END JQUERY VALIDATION PLUGIN -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE CONTENT WRAPPER -->