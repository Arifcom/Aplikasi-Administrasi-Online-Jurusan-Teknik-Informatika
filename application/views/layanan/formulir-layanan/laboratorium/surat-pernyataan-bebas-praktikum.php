<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Formulir KHS</h3>
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <div class="block">
                        <?php echo form_open_multipart(base_url() . 'layanan/laboratorium/surat-pernyataan-bebas-praktikum/insert', array('id'=>'jvalidate', 'role'=>'form', 'class'=>'form-horizontal'));?>
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
                                    <label class="col-md-3 control-label">Kontak Nomor</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="kontak_nomor"/>
                                        <span class="help-block">Isi kontak nomor</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>                   
                                <div class="form-group">
                                    <label class="col-md-3 control-label">File</label>
                                    <div class="col-md-6">
                                        <input name="file" type="file" multiple id="file-simple"/>
                                        <span class="help-block">Isi file</span>
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