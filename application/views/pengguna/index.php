<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <h3 class="panel-title">Daftar Pengguna</h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>                                
                </div>
                <div class="panel-body">
                    <div class="col-md-3 text-right">
                        
                    </div>
                    <div class="col-md-3">
                        <a href="<?php echo base_url(); ?>" class="btn btn-block btn-info">Impor Tabel</a>
                    </div>
                    <div class="col-md-3 text-left">
                        <a href="<?php echo base_url(); ?>" class="btn btn-block btn-info">Ekspor Tabel</a>
                    </div>
                    <div class="col-md-3 text-left">
                        
                    </div>
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <div class="clearfix"></div>
                    <br>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Nama</th>
                                <th style="text-align: center;">Email</th>
                                <th style="text-align: center;">Hak Akses</th>
                                <th style="text-align: center;">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($query as $datas):
                                echo
                                "
                                <tr>
                                    <td style='text-align: left;'>$datas->nama_depan $datas->nama_belakang</td>
                                    <td style='text-align: left;'>$datas->email</td>
                                    <td style='text-align: left;'>$datas->hak_akses</td>
                                    <td style='text-align: center;'>
                                    <a href='" . base_url() . "administrator/pengguna/$datas->pengguna_id'>
                                        <span class='fa fa-eye'></span>
                                    </a>
                                    </td>
                                </tr>
                                ";
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->               