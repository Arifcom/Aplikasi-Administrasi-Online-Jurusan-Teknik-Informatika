<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Formulir Surat Keterangan Masih Kuliah</h3>
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <div class="block">
                        <form id="jvalidate" role="form" class="form-horizontal" action="<?php echo base_url(); ?>layanan/lainnya/surat-keterangan-masih-kuliah/insert" method="post">
                            <div class="panel-body">                                    
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
                                    <label class="col-md-3 control-label">Tempat Lahir</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="tempat_lahir"/>
                                        <span class="help-block">Isi tempat lahir</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>                                                                                                                       
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Tanggal Lahir</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control datepicker" name="tanggal_lahir"/>
                                        <span class="help-block">Isi tanggal lahir</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>                                                                                        
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Alamat</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="alamat"/>
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
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-6">
                                        <div class="btn-group pull-right">
                                            <div>
                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                <button class="btn btn-primary" type="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
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