<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <h3 class="panel-title">Hasil Pencarian</h3>                               
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo base_url(); ?>pencarian/index" method="post">
                    <div class="input-group">
                        <input type="text" name="nim" placeholder="NIM" class="form-control"/>
                        <div class="input-group-btn">
                            <button class="btn btn-primary"><span class="fa fa-search"></span></button>
                        </div>
                    </div>
                    </form>
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <div class="clearfix"></div>
                    <br>
                        <table class="table datatable_simple">
                        <thead>
                            <tr>
                                <th style="text-align: center;">NIM</th>
                                <th style="text-align: center;">Nama</th>
                                <th style="text-align: center;">Keterangan</th>
                                <th style="text-align: center;">Tanggal</th>
                                <th style="text-align: center;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($query as $datas):
                                echo
                                "
                                <tr>
                                    <td style='text-align: center;'>$datas->nim</td>
                                    <td style='text-align: left;'>$datas->nama_depan $datas->nama_belakang</td>
                                    <td style='text-align: left;'>$datas->keterangan</td>
                                    <td style='text-align: center;'>$datas->date</td>
                                    <td style='text-align: center;'>$datas->status diproses</td>
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
        <div class="col-md-2"></div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->              