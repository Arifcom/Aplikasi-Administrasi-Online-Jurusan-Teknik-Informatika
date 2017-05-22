<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php echo $title_bar; ?></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo/logo.png" type="image/x-icon" />
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <?php
        if ($content == "home" | $content == "pencarian" | $content == "tentang" | $content == "layanan/formulir-layanan/khs" | $content == "layanan/formulir-layanan/laboratorium/surat-pernyataan-bebas-praktikum" | $content == "layanan/formulir-layanan/kp/permohonan" | $content == "layanan/formulir-layanan/kp/seminar" | $content == "layanan/formulir-layanan/transkip-nilai-sementara" | $content == "layanan/formulir-layanan/transkip-nilai-akhir" | $content == "layanan/formulir-layanan/lainnya/surat-keterangan-aktif-kuliah" | $content == "layanan/formulir-layanan/lainnya/surat-keterangan-berkelakuan-baik" | $content == "layanan/formulir-layanan/lainnya/surat-keterangan-masih-kuliah" | $content == "layanan/formulir-layanan/lainnya/surat-keterangan-beasiswa" | $content == "layanan/formulir-layanan/ta/pengajuan-judul" | $content == "layanan/formulir-layanan/ta/seminar-proposal" | $content == "layanan/formulir-layanan/ta/seminar-hasil" | $content == "layanan/formulir-layanan/ta/sidang") {
        ?>
        <!-- START PAGE CONTAINER -->
        <div class="page-container page-navigation-top">            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal">
                    <li class="xn-logo">
                        <a href="index.html">Application</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>                     
                    <li <?php if ($active == "Beranda") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>"> <span class="xn-text">Beranda</span></a></li>
                    <li <?php if ($active == "Tentang") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>tentang"> <span class="xn-text">Tentang</span></a></li>
                    <li class="xn-openable">
                        <a href="#"> <span class="xn-text">Layanan</span></a>
                        <ul class="animated zoomIn">
                            <li><a href="<?php echo base_url(); ?>layanan/khs"> KHS</a></li>
                            <li class="xn-openable">
                                <a href="#"> <span class="xn-text">Laboratorium</span></a>
                                <ul class="animated zoomIn">
                                    <li><a href="<?php echo base_url(); ?>layanan/laboratorium/surat-pernyataan-bebas-praktikum"> Surat Pernyataan Bebas Praktikum</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"> <span class="xn-text">KP</span></a>
                                <ul class="animated zoomIn">
                                    <li><a href="<?php echo base_url(); ?>layanan/kp/permohonan"> Permohonan</a></li>
                                    <li><a href="<?php echo base_url(); ?>layanan/kp/seminar"> Seminar</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"> <span class="xn-text">TA</span></a>
                                <ul class="animated zoomIn">
                                    <li><a href="<?php echo base_url(); ?>layanan/ta/pengajuan-judul"> Pengajuan Judul</a></li>
                                    <li><a href="<?php echo base_url(); ?>layanan/ta/seminar-proposal"> Seminar Proposal</a></li>
                                    <li><a href="<?php echo base_url(); ?>layanan/ta/seminar-hasil"> Seminar Hasil</a></li>
                                    <li><a href="<?php echo base_url(); ?>layanan/ta/sidang"> Sidang</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"> <span class="xn-text">Transkip Nilai</span></a>
                                <ul class="animated zoomIn">
                                    <li><a href="<?php echo base_url(); ?>layanan/transkip-nilai-sementara"> Transkip Nilai Sementara</a></li>
                                    <li><a href="<?php echo base_url(); ?>layanan/transkip-nilai-akhir"> Transkip Nilai Akhir</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"> Lainnya</a>
                                <ul>
                                    <li <?php if ($active == "Surat Keterangan Aktif Kuliah") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>layanan/lainnya/surat-keterangan-aktif-kuliah"> Surat Keterangan Aktif Kuliah</a></li>
                                    <li <?php if ($active == "Surat Keterangan Beasiswa") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>layanan/lainnya/surat-keterangan-beasiswa"> Surat Keterangan Beasiswa</a></li>
                                    <li <?php if ($active == "Surat Keterangan Berkelakuan Baik") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>layanan/lainnya/surat-keterangan-berkelakuan-baik"> Surat Keterangan Berkelakuan Baik</a></li>
                                    <li <?php if ($active == "Surat Keterangan Masih Kuliah") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>layanan/lainnya/surat-keterangan-masih-kuliah"> Surat Keterangan Masih Kuliah</a></li>            
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- SIGN OUT -->
                    <li class="pull-right">
                        <?php
                        if($this->session->has_userdata('email')) {
                            echo '<a href="' . base_url() . 'authentication/logout"> <span class="xn-text">Logout (' . $this->session->userdata('email') . ')</span></a>';
                        } else {
                            echo '<a href="' . base_url() . 'authentication"> <span class="xn-text">Login</span></a>';
                        }
                        ?>
                    </li> 
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->
        <?php
        } else {
        ?>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Application</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>                                                                      
                    <li class="xn-title">Navigation</li>
                    <li <?php if ($active == "Dashboard") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-jurusan"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a></li>                    
                    <?php
                    if ($this->session->userdata('hak_akses') == 'Ketua Jurusan') {
                    ?>
                    <li class="xn-openable <?php if ($active == "KHS" | $active == "Permohonan" | $active == "Seminar" | $active == "Surat Pernyataan Bebas Praktikum" | $active == "Transkip Nilai Sementara" | $active == "Transkip Nilai Akhir" | $active == "KP" | $active == "TA" | $active == "Surat Keterangan Aktif Kuliah" | $active == "Surat Keterangan Beasiswa" | $active == "Surat Keterangan Berkelakuan Baik" | $active == "Surat Keterangan Masih Kuliah" | $active == "Pengajuan Judul" | $active == "Seminar Proposal" | $active == "Seminar Hasil" | $active == "Sidang") { echo 'active'; } ?>">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Layanan</span></a>
                        <ul>
                            <li <?php if ($active == "KHS") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/khs"> KHS</a></li>
                            <li class="xn-openable <?php if ($active == "Permohonan" | $active == "Seminar") { echo 'active'; } ?>">
                                <a href="#"> <span class="xn-text">KP</span></a>
                                <ul>
                                    <li <?php if ($active == "Permohonan") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/kp/permohonan"> Permohonan</a></li>
                                    <li <?php if ($active == "Seminar") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/kp/seminar"> Seminar</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable <?php if ($active == "Surat Pernyataan Bebas Praktikum") { echo 'active'; } ?>">
                                <a href="#"> <span class="xn-text">Laboratorium</span></a>
                                <ul>
                                    <li <?php if ($active == "Surat Pernyataan Bebas Praktikum") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/laboratorium/surat-pernyataan-bebas-praktikum"> Surat Pernyataan Bebas Praktikum</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable <?php if ($active == "Pengajuan Judul" | $active == "Seminar Proposal" | $active == "Seminar Hasil" | $active == "Sidang") { echo 'active'; } ?>">
                                <a href="#"> TA</a>
                                <ul>
                                    <li <?php if ($active == "Pengajuan Judul") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/ta/pengajuan-judul"> Penagajuan Judul</a></li>
                                    <li <?php if ($active == "Seminar Proposal") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/ta/seminar-proposal"> Seminar Proposal</a></li>
                                    <li <?php if ($active == "Seminar Hasil") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/ta/seminar-hasil"> Seminar Hasil</a></li>
                                    <li <?php if ($active == "Sidang") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/ta/sidang"> Sidang</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable <?php if ($active == "Transkip Nilai Sementara" | $active == "Transkip Nilai Akhir") { echo 'active'; } ?>">
                                <a href="#"> Transkip Nilai</a>
                                <ul>
                                    <li <?php if ($active == "Transkip Nilai Sementara") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/transkip-nilai-sementara"> Transkip Nilai Sementara</a></li>
                                    <li <?php if ($active == "Transkip Nilai Akhir") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/transkip-nilai-akhir"> Transkip Nilai Akhir</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable <?php if ($active == "Surat Keterangan Aktif Kuliah" | $active == "Surat Keterangan Berkelakuan Baik" | $active == "Surat Keterangan Beasiswa" | $active == "Surat Keterangan Masih Kuliah") { echo 'active'; }?>">
                                <a href="#"> Lainnya</a>
                                <ul>
                                    <li <?php if ($active == "Surat Keterangan Aktif Kuliah") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/lainnya/surat-keterangan-aktif-kuliah"> Surat Keterangan Aktif Kuliah</a></li>
                                    <li <?php if ($active == "Surat Keterangan Beasiswa") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/lainnya/surat-keterangan-beasiswa"> Surat Keterangan Beasiswa</a></li>
                                    <li <?php if ($active == "Surat Keterangan Berkelakuan Baik") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/lainnya/surat-keterangan-berkelakuan-baik"> Surat Keterangan Berkelakuan Baik</a></li>
                                    <li <?php if ($active == "Surat Keterangan Masih Kuliah") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>ketua-jurusan/layanan/lainnya/surat-keterangan-masih-kuliah"> Surat Keterangan Masih Kuliah</a></li>                                        
                                </ul>
                            </li>
                        </ul>
                        <li <?php if ($active == "Jadwal") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-jurusan/jadwal"><span class="fa fa-clock-o"></span> <span class="xn-text">Jadwal</span></a></li>
                    </li>
                    <?php
                    } else if ($this->session->userdata('hak_akses') == 'Sekretaris Jurusan') {
                    ?>
                    <li class="xn-openable <?php if ($active == "KHS" | $active == "Permohonan" | $active == "Seminar" | $active == "Surat Pernyataan Bebas Praktikum" | $active == "Transkip Nilai Sementara" | $active == "Transkip Nilai Akhir" | $active == "KP" | $active == "TA" | $active == "Surat Keterangan Aktif Kuliah" | $active == "Surat Keterangan Beasiswa" | $active == "Surat Keterangan Berkelakuan Baik" | $active == "Surat Keterangan Masih Kuliah" | $active == "Pengajuan Judul" | $active == "Seminar Proposal" | $active == "Seminar Hasil" | $active == "Sidang") { echo 'active'; } ?>">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Layanan</span></a>
                        <ul>
                            <li <?php if ($active == "KHS") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/khs"> KHS</a></li>
                            <li class="xn-openable <?php if ($active == "Permohonan" | $active == "Seminar") { echo 'active'; } ?>">
                                <a href="#"> <span class="xn-text">KP</span></a>
                                <ul>
                                    <li <?php if ($active == "Permohonan") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/kp/permohonan"> Permohonan</a></li>
                                    <li <?php if ($active == "Seminar") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/kp/seminar"> Seminar</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable <?php if ($active == "Surat Pernyataan Bebas Praktikum") { echo 'active'; } ?>">
                                <a href="#"> <span class="xn-text">Laboratorium</span></a>
                                <ul>
                                    <li <?php if ($active == "Surat Pernyataan Bebas Praktikum") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/laboratorium/surat-pernyataan-bebas-praktikum"> Surat Pernyataan Bebas Praktikum</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable <?php if ($active == "Pengajuan Judul" | $active == "Seminar Proposal" | $active == "Seminar Hasil" | $active == "Sidang") { echo 'active'; } ?>">
                                <a href="#"> TA</a>
                                <ul>
                                    <li <?php if ($active == "Pengajuan Judul") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/ta/pengajuan-judul"> Penagajuan Judul</a></li>
                                    <li <?php if ($active == "Seminar Proposal") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/ta/seminar-proposal"> Seminar Proposal</a></li>
                                    <li <?php if ($active == "Seminar Hasil") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/ta/seminar-hasil"> Seminar Hasil</a></li>
                                    <li <?php if ($active == "Sidang") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/ta/sidang"> Sidang</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable <?php if ($active == "Transkip Nilai Sementara" | $active == "Transkip Nilai Akhir") { echo 'active'; } ?>">
                                <a href="#"> Transkip Nilai</a>
                                <ul>
                                    <li <?php if ($active == "Transkip Nilai Sementara") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/transkip-nilai-sementara"> Transkip Nilai Sementara</a></li>
                                    <li <?php if ($active == "Transkip Nilai Akhir") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/transkip-nilai-akhir"> Transkip Nilai Akhir</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable <?php if ($active == "Surat Keterangan Aktif Kuliah" | $active == "Surat Keterangan Berkelakuan Baik" | $active == "Surat Keterangan Beasiswa" | $active == "Surat Keterangan Masih Kuliah") { echo 'active'; }?>">
                                <a href="#"> Lainnya</a>
                                <ul>
                                    <li <?php if ($active == "Surat Keterangan Aktif Kuliah") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/lainnya/surat-keterangan-aktif-kuliah"> Surat Keterangan Aktif Kuliah</a></li>
                                    <li <?php if ($active == "Surat Keterangan Beasiswa") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/lainnya/surat-keterangan-beasiswa"> Surat Keterangan Beasiswa</a></li>
                                    <li <?php if ($active == "Surat Keterangan Berkelakuan Baik") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/lainnya/surat-keterangan-berkelakuan-baik"> Surat Keterangan Berkelakuan Baik</a></li>
                                    <li <?php if ($active == "Surat Keterangan Masih Kuliah") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/layanan/lainnya/surat-keterangan-masih-kuliah"> Surat Keterangan Masih Kuliah</a></li>                                        
                                </ul>
                            </li>
                        </ul>
                        <li <?php if ($active == "Jadwal") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>sekretaris-jurusan/jadwal"><span class="fa fa-clock-o"></span> <span class="xn-text">Jadwal</span></a></li>
                    </li>
                    <?php
                    } else if ($this->session->userdata('hak_akses') == 'Kepala Laboratorium') {
                    ?>
                    <li class="xn-openable <?php if ($active == "Surat Pernyataan Bebas Praktikum") { echo 'active'; } ?>">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Layanan</span></a>
                        <ul>
                            <li class="xn-openable <?php if ($active == "Surat Pernyataan Bebas Praktikum") { echo 'active'; } ?>">
                                <a href="#"> <span class="xn-text">Laboratorium</span></a>
                                <ul>
                                    <li <?php if ($active == "Surat Pernyataan Bebas Praktikum") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>kepala-laboratorium/layanan/laboratorium/surat-pernyataan-bebas-praktikum"> Surat Pernyataan Bebas Praktikum</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php
                    } else if ($this->session->userdata('hak_akses') == 'Koordinator KP') {
                    ?>
                    <li class="xn-openable <?php if ($active == "Permohonan" | $active == "Seminar") { echo 'active'; } ?>">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Layanan</span></a>
                        <ul>
                            <li class="xn-openable <?php if ($active == "Permohonan" | $active == "Seminar") { echo 'active'; } ?>">
                                <a href="#"> <span class="xn-text">KP</span></a>
                                <ul>
                                    <li <?php if ($active == "Permohonan") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>koordinator-kp/layanan/kp/permohonan"> Permohonan</a></li>
                                    <li <?php if ($active == "Seminar") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>koordinator-kp/layanan/kp/seminar"> Seminar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php
                    } else if ($this->session->userdata('hak_akses') == 'Koordinator TA') {
                    ?>
                    <li class="xn-openable <?php if ($active == "TA" | $active == "Pengajuan Judul" | $active == "Seminar Proposal" | $active == "Seminar Hasil" | $active == "Sidang") { echo 'active'; } ?>">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Layanan</span></a>
                        <ul>
                            <li class="xn-openable <?php if ($active == "Pengajuan Judul" | $active == "Seminar Proposal" | $active == "Seminar Hasil" | $active == "Sidang") { echo 'active'; } ?>">
                                <a href="#"> TA</a>
                                <ul>
                                    <li <?php if ($active == "Pengajuan Judul") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>koordinator-ta/layanan/ta/pengajuan-judul"> Penagajuan Judul</a></li>
                                    <li <?php if ($active == "Seminar Proposal") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>koordinator-ta/layanan/ta/seminar-proposal"> Seminar Proposal</a></li>
                                    <li <?php if ($active == "Seminar Hasil") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>koordinator-ta/layanan/ta/seminar-hasil"> Seminar Hasil</a></li>
                                    <li <?php if ($active == "Sidang") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>koordinator-ta/layanan/ta/sidang"> Sidang</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php
                    } else if ($this->session->userdata('hak_akses') == 'Dosen') {
                    ?>
                    <li class="xn-openable <?php if ($active == "TA" | $active == "Pengajuan Judul" | $active == "Seminar Proposal" | $active == "Seminar Hasil" | $active == "Sidang") { echo 'active'; } ?>">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Layanan</span></a>
                        <ul>
                            <li class="xn-openable <?php if ($active == "Pengajuan Judul" | $active == "Seminar Proposal" | $active == "Seminar Hasil" | $active == "Sidang") { echo 'active'; } ?>">
                                <a href="#">TA</span></a>
                                <ul>
                                    <li <?php if ($active == "Pengajuan Judul") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>dosen/layanan/ta/pengajuan-judul"> Pengajuan Judul</a></li>
                                </ul>
                            </li>
                        </ul>
                        <li <?php if ($active == "Jadwal") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>dosen/jadwal"><span class="fa fa-clock-o"></span> <span class="xn-text">Jadwal</span></a></li>
                    </li>   
                    <?php 
                    } else if ($this->session->userdata('hak_akses') == 'Pegawai') {
                    ?>
                    <li class="xn-openable <?php if ($active == "KHS" | $active == "Permohonan" | $active == "Seminar" | $active == "Surat Pernyataan Bebas Praktikum" | $active == "Transkip Nilai Sementara" | $active == "Transkip Nilai Akhir" | $active == "KP" | $active == "TA" | $active == "Surat Keterangan Aktif Kuliah" | $active == "Surat Keterangan Beasiswa" | $active == "Surat Keterangan Berkelakuan Baik" | $active == "Surat Keterangan Masih Kuliah" | $active == "Pengajuan Judul" | $active == "Seminar Proposal" | $active == "Seminar Hasil" | $active == "Sidang") { echo 'active'; } ?>">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Layanan</span></a>
                        <ul>
                            <li <?php if ($active == "KHS") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>pegawai/layanan/khs"> KHS</a></li>
                            <li class="xn-openable <?php if ($active == "Permohonan" | $active == "Seminar") { echo 'active'; } ?>">
                                <a href="#"> <span class="xn-text">KP</span></a>
                                <ul>
                                    <li <?php if ($active == "Permohonan") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>pegawai/layanan/kp/permohonan"> Permohonan</a></li>
                                    <li <?php if ($active == "Seminar") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>pegawai/layanan/kp/seminar"> Seminar</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable <?php if ($active == "Surat Pernyataan Bebas Praktikum") { echo 'active'; } ?>">
                                <a href="#"> <span class="xn-text">Laboratorium</span></a>
                                <ul>
                                    <li <?php if ($active == "Surat Pernyataan Bebas Praktikum") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>pegawai/layanan/laboratorium/surat-pernyataan-bebas-praktikum"> Surat Pernyataan Bebas Praktikum</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable <?php if ($active == "Pengajuan Judul" | $active == "Seminar Proposal" | $active == "Seminar Hasil" | $active == "Sidang") { echo 'active'; } ?>">
                                <a href="#"> TA</a>
                                <ul>
                                    <li <?php if ($active == "Seminar Proposal") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>pegawai/layanan/ta/seminar-proposal"> Seminar Proposal</a></li>
                                    <li <?php if ($active == "Seminar Hasil") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>pegawai/layanan/ta/seminar-hasil"> Seminar Hasil</a></li>
                                    <li <?php if ($active == "Sidang") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>pegawai/layanan/ta/sidang"> Sidang</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable <?php if ($active == "Transkip Nilai Sementara" | $active == "Transkip Nilai Akhir") { echo 'active'; } ?>">
                                <a href="#"> Transkip Nilai</a>
                                <ul>
                                    <li <?php if ($active == "Transkip Nilai Sementara") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>pegawai/layanan/transkip-nilai-sementara"> Transkip Nilai Sementara</a></li>
                                    <li <?php if ($active == "Transkip Nilai Akhir") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>pegawai/layanan/transkip-nilai-akhir"> Transkip Nilai Akhir</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable <?php if ($active == "Surat Keterangan Aktif Kuliah" | $active == "Surat Keterangan Berkelakuan Baik" | $active == "Surat Keterangan Beasiswa" | $active == "Surat Keterangan Masih Kuliah") { echo 'active'; }?>">
                                <a href="#"> Lainnya</a>
                                <ul>
                                    <li <?php if ($active == "Surat Keterangan Aktif Kuliah") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>pegawai/layanan/lainnya/surat-keterangan-aktif-kuliah"> Surat Keterangan Aktif Kuliah</a></li>
                                    <li <?php if ($active == "Surat Keterangan Beasiswa") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>pegawai/layanan/lainnya/surat-keterangan-beasiswa"> Surat Keterangan Beasiswa</a></li>
                                    <li <?php if ($active == "Surat Keterangan Berkelakuan Baik") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>pegawai/layanan/lainnya/surat-keterangan-berkelakuan-baik"> Surat Keterangan Berkelakuan Baik</a></li>
                                    <li <?php if ($active == "Surat Keterangan Masih Kuliah") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>pegawai/layanan/lainnya/surat-keterangan-masih-kuliah"> Surat Keterangan Masih Kuliah</a></li>                                        
                                </ul>
                            </li>
                        </ul>
                    </li>    
                    <?php 
                    } else if ($this->session->userdata('hak_akses') == 'Ketua Kelas') {
                    ?>
                    <li <?php if ($active == "Jadwal") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>ketua-kelas/jadwal"><span class="fa fa-clock-o"></span> <span class="xn-text">Jadwal</span></a></li>
                    <?php 
                    } else if ($this->session->userdata('hak_akses') == 'Administrator') {
                    ?>
                    <li <?php if ($active == "Pengumuman") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>"><span class="fa fa-bullhorn"></span> <span class="xn-text">Pengumuman</span></a></li>
                    <li <?php if ($active == "Pengguna") { echo 'class="active"'; }?>><a href="<?php echo base_url(); ?>administrator/pengguna"><span class="fa fa-user"></span> <span class="xn-text">Pengguna</span></a></li>
                    <li <?php if ($active == "Jadwal") { echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>administrator/jadwal"><span class="fa fa-clock-o"></span> <span class="xn-text">Jadwal</span></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            <!-- PAGE CONTENT -->
            <div class="page-content">
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->   
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>                        
                    </li>
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-list"></span></a>
                        <div class="informer informer-danger">
                        <?php
                        echo count($activity);
                        ?>
                        </div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-list"></span> Notifikasi</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">
                                    <?php
                                    if (count($activity) > 0) {
                                        echo 'Ada Pemberitahuan';
                                    } else {
                                        echo 'Tidak Ada Pemberitahuan';
                                    }
                                    ?>
                                    </span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <?php
                                foreach ($activity as $datas):
                                ?>
                                <a href="#" class="list-group-item">
                                    <span class="contacts-title"><?php echo $datas->log_aktifitas; ?></span>
                                    <p>Pada <?php echo $datas->date . ' ' . $datas->time; ?>.</p>
                                </a>
                                <?php
                                endforeach;
                                ?>
                            </div>   
                            <div class="panel-footer text-center">
                                <a href="#">Tampilkan Semua Notifikasi</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->
        <?php
        }
        ?>                     
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li>Menu</li>
                    <?php if($active == "KHS" | $active == "Pengajuan Judul" | $active == "Seminar Proposal" | $active == "Seminar hasil" | $active == "Sidang" | $active == "Transkip Nilai Sementara" | $active == "Transkip Nilai Akhir" | $active == "Surat Keterangan Aktif Kuliah" | $active == "Surat Keterangan Beasiswa" | $active == "Surat Keterangan Berkelakuan Baik" | $active == "Surat Keterangan Masih Kuliah" | $active == "Permohonan" | $active == "Seminar" | $active == "Surat Pernyataan Bebas Praktikum") { echo '<li>Layanan</li>'; } ?>
                    <?php if($active == "Surat Pernyataan Bebas Praktikum") { echo '<li>Laboratorium</li>'; } ?>
                    <?php if($active == "Permohonan" | $active == "Seminar") { echo '<li>KP</li>'; } ?>
                    <?php if($active == "Pengajuan Judul" | $active == "Seminar Proposal" | $active == "Seminar Hasil" | $active == "Sidang") { echo '<li>TA</li>'; } ?>
                    <li><?php echo $active; ?></li>
                </ul>
                <!-- END BREADCRUMB -->
                <?php
                    if($active == "Beranda" | $active == "Tentang") {
                        
                    } else {
                ?>
                    <div class="page-title">             
                        <h2><span class="fa fa-arrow-circle-o-left"></span> <?php echo $page_title; ?></h2>
                    </div>
                <?php
                    }
                ?>
                <?php $this->load->view($content, $query); ?>       
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Keluar ?</div>
                    <div class="mb-content">
                        <p>Apakah Anda yakin ingin keluar ?</p>                    
                        <p>Klik iya jika ingin keluar.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url() . 'authentication/logout' ?>" class="btn btn-success btn-lg">Iya</a>
                            <button class="btn btn-default btn-lg mb-control-close">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
        <!-- MODAL -->
        <div id="impor_pengguna" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <?php echo form_open_multipart(base_url() . 'administrator/pengguna/impor', array('role'=>'form', 'class'=>'form-horizontal'));?>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center">Impor Excel</h4>
                    </div>
                    <div class="modal-body text-center">
                        <input name="file" type="file" multiple/>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-info">Impor</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- END MODAL -->
        <!-- MODAL -->
        <div id="impor_jadwal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <?php echo form_open_multipart(base_url() . 'administrator/jadwal/impor', array('role'=>'form', 'class'=>'form-horizontal'));?>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center">Impor Excel</h4>
                    </div>
                    <div class="modal-body text-center">
                        <input name="file" type="file" multiple/>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-info">Impor</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- END MODAL -->
        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url(); ?>assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url(); ?>assets/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
        <!-- THIS PAGE PLUGINS -->
        <?php echo $this_page_plugin; ?>
        <!-- END PAGE PLUGINS -->         
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/actions.js"></script>        
        <!-- END TEMPLATE -->
        <!-- END SCRIPTS --> 
        <?php
            if(isset($extra)) {
                echo $extra;
            }
        ?>
    </body>
</html>