<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <?php foreach ($query as $datas): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Detail Surat Seminar KP</h3>
                        <div class="btn-group pull-right">
                            <div>
                                <a href="<?php echo base_url(); ?>pegawai/layanan/kp/seminar/download/<?php echo $datas->kp_seminar_id ?>" class="btn btn-default" type="button">Word</a>
                                <a href="<?php echo base_url(); ?>pegawai/layanan/kp/seminar/delete/<?php echo $datas->kp_seminar_id ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </div>    
                    </div>
                    <div class="panel-body">
                        <?php echo $this->session->flashdata('flash_data'); ?>
                        <div class="block">
                            <form id="jvalidate" role="form" class="form-horizontal" action="<?php echo base_url(); ?>pegawai/layanan/kp/seminar/replace/<?php echo $datas->kp_seminar_id ?>" method="post">
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
                                        <label class="col-md-3 col-xs-12 control-label">Judul</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" rows="5" name="judul"><?php echo $datas->judul ?></textarea>
                                            <span class="help-block">Isi judul</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Instansi</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="instansi" value="<?php echo $datas->instansi ?>"/>
                                            <span class="help-block">Isi instansi</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Waktu Pelaksanaan</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="waktu_pelaksanaan" value="<?php echo $datas->waktu_pelaksanaan ?>"/>
                                            <span class="help-block">Isi waktu pelaksanaan</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Pembimbing</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="pembimbing" value="<?php echo $datas->pembimbing ?>"/>
                                            <span class="help-block">Isi pembimbing</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tanggal Seminar</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" name="tanggal_seminar" value="<?php echo $datas->tanggal_seminar ?>"/>
                                            <span class="help-block">Isi tanggal seminar</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Waktu Seminar</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control timepicker" name="waktu_seminar" value="<?php echo $datas->waktu_seminar ?>"/>
                                            <span class="help-block">Isi waktu seminar</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tempat Seminar</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="tempat_seminar" value="<?php echo $datas->tempat_seminar ?>"/>
                                            <span class="help-block">Isi tempat seminar</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Status</label>  
                                        <div class="col-md-6">
                                            <select class="form-control select" name="status">
                                                <option value="<?php echo $datas->status ?>" selected><?php echo $datas->status ?> diproses</option>
                                                <option value="Belum">Belum diproses</option>
                                                <option value="Sedang">Sedang diproses</option>
                                                <option value="Selesai">Selesai diproses</option>
                                            </select>
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