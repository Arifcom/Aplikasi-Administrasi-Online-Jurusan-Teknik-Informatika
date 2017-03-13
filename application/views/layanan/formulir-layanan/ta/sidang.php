<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Formulir Sidang</h3>
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <div class="block">
                        <form id="jvalidate" role="form" class="form-horizontal" action="<?php echo base_url(); ?>layanan/ta/sidang/insert" method="post">
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
                                        <label class="col-md-3 col-xs-12 control-label">Judul</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" rows="5" name="judul"></textarea>
                                            <span class="help-block">Isi judul</span>
                                        </div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Pembimbing 1</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="pembimbing_1"/>
                                        <span class="help-block">Isi calon pembimbing 1</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Pembimbing 2</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="pembimbing_2"/>
                                        <span class="help-block">Isi calon pembimbing 2</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Penguji 1</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="penguji_1"/>
                                        <span class="help-block">Isi calon penguji 1</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Penguji 2</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="penguji_2"/>
                                        <span class="help-block">Isi calon penguji 2</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Tanggal Sidang</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control datepicker" name="tanggal_sidang"/>
                                        <span class="help-block">Isi tanggal sidang</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Waktu Seminar</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control timepicker" name="waktu_sidang"/>
                                        <span class="help-block">Isi waktu sidang</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Tempat Seminar</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="tempat_sidang"/>
                                        <span class="help-block">Isi tempat sidang</span>
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