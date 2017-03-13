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
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <table class="table datatable_simple">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Nama</th>
                                <th style="text-align: center;">Email</th>
                                <th style="text-align: center;">Hak Akses</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($query as $datas):
                                echo
                                "
                                <tr>
                                    <td style='text-align: center;'>$datas->nama_depan $datas->nama_belakang</td>
                                    <td style='text-align: center;'>$datas->email</td>
                                    <td style='text-align: center;'>$datas->hak_akses</td>
                                    <td style='text-align: center;'>-</td>
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