<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Pengajuan Seminar Proposal</h3>
                </div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('flash_data'); ?>
                    <?php
                    if($this->session->userdata('hak_akses') == 'Ketua Jurusan' | $this->session->userdata('hak_akses') == 'Sekretaris Jurusan') {
                    ?>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">NIM</th>
                                    <th style="text-align: center;">Judul</th>
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
                                        <td style='text-align: center;'>$datas->judul</td>
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
                    } else if($this->session->userdata('hak_akses') == 'Koordinator TA') {
                    ?>
                        <table class="table datatable_simple">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">NIM</th>
                                    <th style="text-align: center;">Judul</th>
                                    <th style="text-align: center;">Tanggal</th>
                                    <th style="text-align: center;">Waktu</th>
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
                                        <td style='text-align: center;'>$datas->judul</td>
                                        <td style='text-align: center;'>$datas->date</td>
                                        <td style='text-align: center;'>$datas->time</td>
                                        <td style='text-align: center;'>
                                        <a href='" . base_url() . "koordinator-ta/layanan/ta/seminar-proposal/$datas->ta_seminar_proposal_id'>
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
                    } else if($this->session->userdata('hak_akses') == 'Dosen') {
                    ?>
                        <table class="table datatable_simple">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">NIM</th>
                                    <th style="text-align: center;">Judul</th>
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
                                        <td style='text-align: center;'>$datas->judul</td>
                                        <td style='text-align: center;'>$datas->status_calon_pembimbing</td>
                                        <td style='text-align: center;'>
                                        <a href='" . base_url() . "dosen/layanan/ta/seminar-proposal/$datas->ta_seminar_proposal_id'>
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
                    } else if($this->session->userdata('hak_akses') == 'Pegawai') {
                    ?>
                        <table class="table datatable_simple">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">NIM</th>
                                    <th style="text-align: center;">Judul</th>
                                    <th style="text-align: center;">Tanggal</th>
                                    <th style="text-align: center;">Waktu</th>
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
                                        <td style='text-align: center;'>$datas->judul</td>
                                        <td style='text-align: center;'>$datas->date</td>
                                        <td style='text-align: center;'>$datas->time</td>
                                        <td style='text-align: center;'>
                                        <a href='" . base_url() . "pegawai/layanan/ta/seminar-proposal/$datas->ta_seminar_proposal_id'>
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