<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <?php
            if($this->session->userdata('hak_akses') == 'Administrator') {
            ?>
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
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#impor_jadwal">Impor Jadwal</button>
                    </div>
                    <div class="col-md-3">
                        <a href="<?php echo base_url(); ?>administrator/jadwal/ekspor" class="btn btn-block btn-info">Ekspor Jadwal</a>
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <div class="clearfix"></div>
                    <br>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Hari</th>
                                <th style="text-align: center;">Jam</th>
                                <th style="text-align: center;">Mata Kuliah</th>
                                <th style="text-align: center;">Kelas</th>
                                <th style="text-align: center;">Dosen</th>
                                <th style="text-align: center;">Ruangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($query as $datas):
                                echo
                                "
                                <tr>
                                    <td style='text-align: left;'>$datas->hari</td>
                                    <td style='text-align: center;'>$datas->jam</td>
                                    <td style='text-align: left;'>$datas->mata_kuliah</td>
                                    <td style='text-align: center;'>$datas->kelas</td>
                                    <td style='text-align: left;'>$datas->dosen</td>
                                    <td style='text-align: left;'>$datas->ruangan</td>
                                </tr>
                                ";
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
            <?php
            } else if($this->session->userdata('hak_akses') == 'Ketua Jurusan') {
            ?>
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <h3 class="panel-title">Daftar Jadwal</h3>      
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <div class="clearfix"></div>
                    <br>
                    <table class="table datatable_simple">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Hari</th>
                                <th style="text-align: center;">Jam</th>
                                <th style="text-align: center;">Mata Kuliah</th>
                                <th style="text-align: center;">Kelas</th>
                                <th style="text-align: center;">Dosen</th>
                                <th style="text-align: center;">Ruangan</th>
                                <th style="text-align: center;">Konfirmasi Dosen</th>
                                <th style="text-align: center;">Konfirmasi Ketua Kelas</th>
                                <th style="text-align: center;">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($query as $datas):
                                $dosen = "";
                                $ketua_kelas = "";
                                if($datas->konfirmasi_dosen == "Iya") {
                                    $dosen = "Masuk";
                                } else {
                                    $dosen = " Tidak Masuk";
                                }
                                if($datas->konfirmasi_ketua_kelas == "Iya") {
                                    $ketua_kelas = "Masuk";
                                } else {
                                    $ketua_kelas = " Tidak Masuk";
                                }
                                echo
                                "
                                <tr>
                                    <td style='text-align: left;'>$datas->hari</td>
                                    <td style='text-align: center;'>$datas->jam</td>
                                    <td style='text-align: left;'>$datas->mata_kuliah</td>
                                    <td style='text-align: center;'>$datas->kelas</td>
                                    <td style='text-align: center;'>$datas->dosen</td>
                                    <td style='text-align: left;'>$datas->ruangan</td>
                                    <td style='text-align: center;'>$dosen</td>
                                    <td style='text-align: center;'>$ketua_kelas</td>
                                    <td style='text-align: center;'>$datas->date</td>
                                </tr>
                                ";
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
            <?php
            ?>
            <?php
            } else if($this->session->userdata('hak_akses') == 'Dosen') {
            ?>
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <h3 class="panel-title">Daftar Jadwal</h3>      
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <div class="clearfix"></div>
                    <br>
                    <table class="table datatable_simple">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Hari</th>
                                <th style="text-align: center;">Jam</th>
                                <th style="text-align: center;">Mata Kuliah</th>
                                <th style="text-align: center;">Kelas</th>
                                <th style="text-align: center;">Ruangan</th>
                                <th style="text-align: center;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($query as $datas):
                                echo
                                "
                                <tr>
                                    <td style='text-align: left;'>$datas->hari</td>
                                    <td style='text-align: center;'>$datas->jam</td>
                                    <td style='text-align: left;'>$datas->mata_kuliah</td>
                                    <td style='text-align: center;'>$datas->kelas</td>
                                    <td style='text-align: left;'>$datas->ruangan</td>
                                    <td style='text-align: center;'>
                                        <a href='" . base_url() . "dosen/jadwal/konfirmasi_dosen/$datas->jadwal_id'>
                                    <span class='fa fa-check-square-o'></td>
                                </tr>
                                ";
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->  
            <?php
            } else if($this->session->userdata('hak_akses') == 'Ketua Kelas') {
            ?>
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <h3 class="panel-title">Daftar Jadwal</h3>      
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <div class="clearfix"></div>
                    <br>
                    <table class="table datatable_simple">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Hari</th>
                                <th style="text-align: center;">Jam</th>
                                <th style="text-align: center;">Mata Kuliah</th>
                                <th style="text-align: center;">Kelas</th>
                                <th style="text-align: center;">Dosen</th>
                                <th style="text-align: center;">Ruangan</th>
                                <th style="text-align: center;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($query as $datas):
                                echo
                                "
                                <tr>
                                    <td style='text-align: left;'>$datas->hari</td>
                                    <td style='text-align: center;'>$datas->jam</td>
                                    <td style='text-align: left;'>$datas->mata_kuliah</td>
                                    <td style='text-align: center;'>$datas->kelas</td>
                                    <td style='text-align: left;'>$datas->dosen</td>
                                    <td style='text-align: left;'>$datas->ruangan</td>
                                    <td style='text-align: center;'>
                                        <a href='" . base_url() . "ketua-kelas/jadwal/konfirmasi-ketua-kelas/$datas->jadwal_id'>
                                    <span class='fa fa-check-square-o'></td>
                                </tr>
                                ";
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->              