<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <?php foreach ($query as $datas): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Detail Seminar Hasil</h3>
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                        <div class="block">
                            <form id="jvalidate" role="form" class="form-horizontal" action="<?php echo base_url(); ?>pegawai/layanan/ta/seminar-proposal/replace/<?php echo $datas->ta_seminar_proposal_id ?>" method="post">
                                <div class="panel-body">          
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nama Depan</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nama_depan" value="<?php echo $datas->nama_depan ?>" <?php if($this->session->userdata('hak_akses') == 'Pegawai') {} else {echo "disabled";} ?>/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                       
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nama Belakang</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nama_belakang" value="<?php echo $datas->nama_belakang ?>" <?php if($this->session->userdata('hak_akses') == 'Pegawai') {} else {echo "disabled";} ?>/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                                                                                                       
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">NIM</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nim" value="<?php echo $datas->nim ?>" <?php if($this->session->userdata('hak_akses') == 'Pegawai') {} else {echo "disabled";} ?>/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>                                 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Judul</label>  
                                        <div class="col-md-6">
                                            <textarea class="form-control" rows="5" name="judul" <?php if($this->session->userdata('hak_akses') == 'Pegawai') {} else {echo "disabled";} ?>><?php echo $datas->judul ?></textarea>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>   
                                    <div class="form-group">
                                    <label class="col-md-3 control-label">Pembimbing 1</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="pembimbing_1" value="<?php echo $datas->pembimbing_1 ?>" <?php if($this->session->userdata('hak_akses') == 'Pegawai') {} else {echo "disabled";} ?>/>
                                        <span class="help-block">Isi calon pembimbing 1</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Pembimbing 2</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="pembimbing_2" value="<?php echo $datas->pembimbing_2 ?>" <?php if($this->session->userdata('hak_akses') == 'Pegawai') {} else {echo "disabled";} ?>/>
                                            <span class="help-block">Isi calon pembimbing 2</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Penguji 1</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="penguji_1" value="<?php echo $datas->penguji_1 ?>" <?php if($this->session->userdata('hak_akses') == 'Pegawai') {} else {echo "disabled";} ?>/>
                                            <span class="help-block">Isi calon penguji 1</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Penguji 2</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="penguji_2" value="<?php echo $datas->penguji_2 ?>" <?php if($this->session->userdata('hak_akses') == 'Pegawai') {} else {echo "disabled";} ?>/>
                                            <span class="help-block">Isi calon penguji 2</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tanggal Seminar</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" name="tanggal_seminar" value="<?php echo $datas->tanggal_seminar ?>" <?php if($this->session->userdata('hak_akses') == 'Pegawai') {} else {echo "disabled";} ?>/>
                                            <span class="help-block">Isi tanggal seminar</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Waktu Seminar</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control timepicker" name="waktu_seminar" value="<?php echo $datas->waktu_seminar ?>" <?php if($this->session->userdata('hak_akses') == 'Pegawai') {} else {echo "disabled";} ?>/>
                                            <span class="help-block">Isi waktu seminar</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tempat Seminar</label>  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="tempat_seminar" value="<?php echo $datas->tempat_seminar ?>" <?php if($this->session->userdata('hak_akses') == 'Pegawai') {} else {echo "disabled";} ?>/>
                                            <span class="help-block">Isi tempat seminar</span>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <input type="hidden" name="date" value="<?php echo $datas->date ?>"/>
                                    <input type="hidden" name="time" value="<?php echo $datas->time ?>"/>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"></label>
                                        <?php
                                        if($this->session->userdata('hak_akses') == 'Pegawai') {
                                        ?>
                                        <div class="col-md-6">
                                            <div class="btn-group pull-right">
                                                <div>
                                                    <button class="btn btn-primary" type="reset">Reset</button>
                                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                                </div>
                                            </div>    
                                        </div>
                                        <?php
                                        }
                                        ?>
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