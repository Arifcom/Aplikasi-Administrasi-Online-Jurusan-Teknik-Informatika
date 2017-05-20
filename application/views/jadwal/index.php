<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <h3 class="panel-title">Daftar Jadwal</h3>
                    <div class="btn-group pull-right">
                        <div>
                            <a href="<?php echo base_url(); ?>administrator/jadwal/reset" class="btn btn-danger">Reset Jadwal</a>
                        </div>
                    </div>                           
                </div>
                <div class="panel-body">
                    <div class="col-md-3 text-right">
                        
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#impor_jadwal">Impor Jadwal</button>
                    </div>
                    <div class="col-md-3 text-left">
                        <a href="<?php echo base_url(); ?>administrator/jadwal/ekspor" class="btn btn-block btn-info">Ekspor Jadwal</a>
                    </div>
                    <div class="col-md-3 text-left">
                        
                    </div>
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <div class="clearfix"></div>
                    <br>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Mata Kuliah</th>
                                <th style="text-align: center;">Kelas</th>
                                <th style="text-align: center;">Dosen</th>
                                <th style="text-align: center;">Hari</th>
                                <th style="text-align: center;">Jam</th>
                                <th style="text-align: center;">Ruangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->              