<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Permohonan Surat Keterangan Bebas Praktikum</h3>
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <?php
                    if($this->session->userdata('hak_akses') == 'Ketua Jurusan') {
                    ?>
                        <table class="table datatable_simple">
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
                                        <td>Memohon pembuatan surat keterangan bebas praktikum.</td>
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
                    } else if($this->session->userdata('hak_akses') == 'Kepala Laboratorium') {
                    ?>
                        <table class="table datatable_simple">
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
                                        <td>Memohon pembuatan surat keterangan bebas praktikum.</td>
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
                                        <td>Memohon pembuatan surat keterangan bebas praktikum.</td>
                                        <td style='text-align: center;'>$datas->date</td>
                                        <td style='text-align: center;'>$datas->time</td>
                                        <td style='text-align: center;'>$datas->status diproses</td>
                                        <td style='text-align: center;'>
                                        <a href='" . base_url() . "pegawai/layanan/laboratorium/surat-pernyataan-bebas-praktikum/$datas->laboratorium_surat_id'>
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
        </div>
    </div>
</div>
<!-- PAGE CONTENT WRAPPER -->