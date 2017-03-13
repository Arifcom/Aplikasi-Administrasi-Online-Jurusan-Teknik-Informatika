<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <?php foreach ($query as $datas): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Detail Surat Keterangan Beasiswa</h3>                    
                    <div class="btn-group pull-right">
                        <div>
                            <a href="<?php echo base_url(); ?>pegawai/layanan/lainnya/surat-keterangan-beasiswa/download/<?php echo $datas->surat_keterangan_beasiswa_id ?>" class="btn btn-default" type="button">Word</a>
                            <a href="<?php echo base_url(); ?>pegawai/layanan/lainnya/surat-keterangan-beasiswa/delete/<?php echo $datas->surat_keterangan_beasiswa_id ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>    
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                        <div class="block">
                            <form id="jvalidate" role="form" class="form-horizontal" action="<?php echo base_url(); ?>pegawai/layanan/lainnya/surat-keterangan-beasiswa/replace/<?php echo $datas->surat_keterangan_beasiswa_id ?>" method="post">
                                <div class="panel-body">                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nama Depan</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nama_depan" value="<?php echo $datas->nama_depan ?>"/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                       
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nama Belakang</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nama_belakang" value="<?php echo $datas->nama_belakang ?>"/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                       
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">NIM</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nim" value="<?php echo $datas->nim ?>"/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                       
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Semester</label>  
                                        <div class="col-md-6">
                                            <select class="form-control select" name="semester">
                                                <option selected><?php echo $datas->semester ?></option>
                                                <?php
                                                for ($i = 1; $i < 15; $i++) {
                                                    echo '<option>' . $i . '</option>';
                                                }
                                                ?>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                       
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tempat Lahir</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $datas->tempat_lahir ?>"/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                       
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tanggal Lahir</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" name="tanggal_lahir" value="<?php echo $datas->tanggal_lahir ?>"/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                        
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Alamat</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="alamat" value="<?php echo $datas->alamat ?>"/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                        
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Kontak Nomor</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="kontak_nomor" value="<?php echo $datas->kontak_nomor ?>"/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                       
                                    <input type="hidden" name="date" value="<?php echo $datas->date ?>"/>
                                    <input type="hidden" name="time" value="<?php echo $datas->time ?>"/>
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
    <?php endforeach; ?>
</div>
<!-- PAGE CONTENT WRAPPER -->