<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <?php foreach ($query as $datas): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Detail Pengajuan Judul</h3>
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                        <div class="block">
                            <?php            
                            if($this->session->userdata('hak_akses') == 'Koordinator TA') {
                            ?>
                            <form id="jvalidate" role="form" class="form-horizontal" action="<?php echo base_url(); ?>koordinator-ta/layanan/ta/pengajuan-judul/replace/<?php echo $datas->ta_pengajuan_judul_id ?>" method="post">
                            <?php
                            } else if($this->session->userdata('hak_akses') == 'Dosen') {
                            ?>
                            <form id="jvalidate" role="form" class="form-horizontal" action="<?php echo base_url(); ?>dosen/layanan/ta/pengajuan-judul/replace/<?php echo $datas->ta_pengajuan_judul_id ?>" method="post">
                            <?php
                            }
                            ?>
                                <div class="panel-body">          
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nama Depan</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nama_depan" value="<?php echo $datas->nama_depan ?>" disabled/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                       
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nama Belakang</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nama_belakang" value="<?php echo $datas->nama_belakang ?>" disabled/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                       
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">NIM</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nim" value="<?php echo $datas->nim ?>" disabled/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="email" value="<?php echo $datas->email ?>" disabled/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Judul</label>  
                                        <div class="col-md-6">
                                            <textarea class="form-control" rows="5" name="judul" disabled><?php echo $datas->judul ?></textarea>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>   
                                    <?php            
                                    if($this->session->userdata('hak_akses') == 'Koordinator TA') {
                                    ?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Calon Pembimbing</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="calon_pembimbing" value="<?php echo $datas->calon_pembimbing ?>" disabled/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Keputusan</label>  
                                        <div class="col-md-6">
                                            <select class="form-control select" name="status">
                                                <option selected><?php echo $datas->status ?></option>
                                                <option>Terima</option>
                                                <option>Terima Bersyarat</option>
                                                <option>Revisi</option>
                                                <option>Tolak</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Komentar</label>  
                                        <div class="col-md-6">
                                            <textarea class="form-control" rows="5" name="komentar"></textarea>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <?php
                                    } else if($this->session->userdata('hak_akses') == 'Dosen') {
                                    ?>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Keputusan</label>  
                                        <div class="col-md-6">
                                            <select class="form-control select" name="status_calon_pembimbing">
                                                <option selected><?php echo $datas->status_calon_pembimbing ?></option>
                                                <option>Diterima</option>
                                                <option>Ditolak</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <?php
                                    }
                                    ?>
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