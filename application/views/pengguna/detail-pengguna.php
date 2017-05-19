<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <?php foreach ($query as $datas): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Detail Pengguna</h3>
                    <div class="btn-group pull-right">
                        <div>
                            <a href="<?php echo base_url(); ?>administrator/pengguna/delete/<?php echo $datas->pengguna_id ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>    
                </div>
                <div class="panel-body">
                    <div class="block">
                        <form id="jvalidate" role="form" class="form-horizontal" action="<?php echo base_url(); ?>administrator/pengguna/replace/<?php echo $datas->pengguna_id ?>" method="post">
                            <div class="panel-body">  
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Identitas</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="identitas" value="<?php echo $datas->pengguna_id ?>" disabled/>
                                        <span class="help-block">Isi identitas</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Email</label>  
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" value="<?php echo $datas->email ?>"/>
                                        <span class="help-block">Isi email</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>    
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password</label>  
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password" id="password"/>
                                        <span class="help-block">Isi password</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Konfirmasi Password</label>  
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="confirm_password"/>
                                        <span class="help-block">Isi konfirmasi password</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Nama Depan</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="nama_depan" value="<?php echo $datas->nama_depan ?>"/>
                                        <span class="help-block">Isi nama depan</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>                                                                                                                       
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Nama Belakang</label>  
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="nama_belakang" value="<?php echo $datas->nama_belakang ?>"/>
                                        <span class="help-block">Isi nama belakang</span>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>                                                                                                                                                                                                                                         
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Hak Akses</label>  
                                    <div class="col-md-6">
                                        <select class="form-control select" name="hak_akses">
                                            <option selected><?php echo $datas->hak_akses ?></option>
                                            <option>Administrator</option>
                                            <option>Ketua Jurusan</option>
                                            <option>Sekretaris Jurusan</option>
                                            <option>Kepala Laboratorium</option>
                                            <option>Koordinator KP</option>
                                            <option>Koordinator TA</option>
                                            <option>Dosen</option>
                                            <option>Pegawai</option>
                                            <option>Ketua Kelas</option>
                                        </select>
                                        <span class="help-block">Pilih Hak Akses</span>
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
    <?php endforeach; ?>
</div>
<!-- PAGE CONTENT WRAPPER -->