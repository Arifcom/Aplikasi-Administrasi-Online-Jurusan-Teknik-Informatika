<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Formulir Seminar Kerja Praktek</h3>
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <div class="block">
                        <?php echo form_open_multipart(base_url() . 'layanan/kp/seminar/insert', array('id'=>'jvalidate', 'role'=>'form', 'class'=>'form-horizontal'));?>
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
                                    <label class="col-md-3 control-label">Instansi</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="instansi"/>
                                        <span class="help-block">Isi instansi</span>
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
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Pembimbing</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="pembimbing"/>
                                        <span class="help-block">Isi pembimbing</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Tanggal Seminar</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control datepicker" name="tanggal_seminar"/>
                                        <span class="help-block">Isi tanggal seminar</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Waktu Seminar</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control timepicker" name="waktu_seminar"/>
                                        <span class="help-block">Isi waktu seminar</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Tempat Seminar</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="tempat_seminar"/>
                                        <span class="help-block">Isi tempat seminar</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Foto Scan KTM</label>
                                    <div class="col-md-6">
                                        <input name="gambar" type="file" multiple id="file-simple"/>
                                        <span class="help-block">Isi foto scan ktm</span>
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