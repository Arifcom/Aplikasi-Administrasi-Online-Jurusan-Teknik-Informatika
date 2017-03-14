<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <h3 class="panel-title">Daftar Permohonan Surat Keterangan Aktif Kuliah</h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>                                
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <?php
                    if($this->session->userdata('hak_akses') == 'Ketua Jurusan') {
                    ?>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">NIM</th>
                                    <th>Keterangan</th>
                                    <th style="text-align: center;">Tanggal</th>
                                    <th style="text-align: center;">Waktu</th>
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
                                        <td>Memohon pembuatan surat keterangan aktif kuliah.</td>
                                        <td style='text-align: center;'>$datas->date</td>
                                        <td style='text-align: center;'>$datas->time</td>
                                        <td style='text-align: center;'>$datas->status diproses</td>
                                    </tr>
                                    ";
                                endforeach;
                                ?>                            
                            </tbody>
                        </table>
                    <?php            
                    } else if($this->session->userdata('hak_akses') == 'Pegawai') {
                    ?>
                        <table class="table datatable_simple">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">NIM</th>
                                    <th>Keterangan</th>
                                    <th style="text-align: center;">Tanggal</th>
                                    <th style="text-align: center;">Waktu</th>
                                    <th style="text-align: center;">Status</th>
                                    <th style="text-align: center;">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($query as $datas):
                                    echo
                                    "
                                    <tr>
                                        <td style='text-align: center;'>$datas->nim</td>
                                        <td>Memohon pembuatan surat keterangan aktif kuliah.</td>
                                        <td style='text-align: center;'>$datas->date</td>
                                        <td style='text-align: center;'>$datas->time</td>
                                        <td style='text-align: center;'>$datas->status diproses</td>
                                        <td style='text-align: center;'>
                                        <a href='" . base_url() . "pegawai/layanan/lainnya/surat-keterangan-aktif-kuliah/$datas->surat_keterangan_aktif_kuliah_id'>
                                        <span class='fa fa-eye'></span>
                                        </a>
                                        </td>
                                    </tr>
                                    ";
                                endforeach;
                                ?>                            
                            </tbody>
                        </table>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->                