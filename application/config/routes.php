<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['layanan/laboratorium/surat-pernyataan-bebas-praktikum'] = 'layanan/suratpernyataanbebaspraktikum';
$route['layanan/ta/pengajuan-judul'] = 'layanan/ta/pengajuanjudul';
$route['layanan/ta/pengajuan-judul/insert'] = 'layanan/ta/pengajuanjudul/insert';
$route['layanan/ta/seminar-proposal'] = 'layanan/ta/seminarproposal';
$route['layanan/ta/seminar-proposal/insert'] = 'layanan/ta/seminarproposal/insert';
$route['layanan/ta/seminar-hasil'] = 'layanan/ta/seminarhasil';
$route['layanan/ta/seminar-hasil/insert'] = 'layanan/ta/seminarhasil/insert';
$route['layanan/ta/sidang'] = 'layanan/ta/sidang';
$route['layanan/transkip-nilai-sementara'] = 'layanan/transkipnilaisementara';
$route['layanan/transkip-nilai-sementara/insert'] = 'layanan/transkipnilaisementara/insert';
$route['layanan/transkip-nilai-akhir'] = 'layanan/transkipnilaiakhir';
$route['layanan/transkip-nilai-akhir/insert'] = 'layanan/transkipnilaiakhir/insert';
$route['layanan/lainnya/surat-keterangan-aktif-kuliah'] = 'layanan/lainnya/suratketeranganaktifkuliah';
$route['layanan/lainnya/surat-keterangan-aktif-kuliah/insert'] = 'layanan/lainnya/suratketeranganaktifkuliah/insert';
$route['layanan/lainnya/surat-keterangan-beasiswa'] = 'layanan/lainnya/suratketeranganbeasiswa';
$route['layanan/lainnya/surat-keterangan-beasiswa/insert'] = 'layanan/lainnya/suratketeranganbeasiswa/insert';
$route['layanan/lainnya/surat-keterangan-berkelakuan-baik'] = 'layanan/lainnya/suratketeranganberkelakuanbaik';
$route['layanan/lainnya/surat-keterangan-berkelakuan-baik/insert'] = 'layanan/lainnya/suratketeranganberkelakuanbaik/insert';
$route['layanan/lainnya/surat-keterangan-masih-kuliah'] = 'layanan/lainnya/suratketeranganmasihkuliah';
$route['layanan/lainnya/surat-keterangan-masih-kuliah/insert'] = 'layanan/lainnya/suratketeranganmasihkuliah/insert';
$route['administrator'] = 'dashboard';
$route['administrator/pengguna'] = 'pengguna';
$route['administrator/pengguna/(:num)'] = 'pengguna/detail/$1';
$route['administrator/pengguna/tambah'] = 'pengguna/create';
$route['administrator/pengguna/impor'] = 'pengguna/impor';
$route['administrator/pengguna/ekspor'] = 'pengguna/ekspor';
$route['administrator/pengguna/insert'] = 'pengguna/insert';
$route['administrator/pengguna/replace/(:any)'] = 'pengguna/replace/$1';
$route['administrator/pengguna/delete/(:any)'] = 'pengguna/delete/$1';
$route['ketua-jurusan'] = 'dashboard';
$route['ketua-jurusan/layanan/khs'] = 'layanan/khs';
$route['ketua-jurusan/layanan/ta/pengajuan-judul'] = 'layanan/ta/pengajuanjudul';
$route['ketua-jurusan/layanan/ta/seminar-proposal'] = 'layanan/ta/seminarproposal';
$route['ketua-jurusan/layanan/ta/seminar-hasil'] = 'layanan/ta/seminarhasil';
$route['ketua-jurusan/layanan/ta/sidang'] = 'layanan/ta/sidang';
$route['ketua-jurusan/layanan/transkip-nilai-sementara'] = 'layanan/transkipnilaisementara';
$route['ketua-jurusan/layanan/transkip-nilai-akhir'] = 'layanan/transkipnilaiakhir';
$route['ketua-jurusan/layanan/lainnya/surat-keterangan-aktif-kuliah'] = 'layanan/lainnya/suratketeranganaktifkuliah';
$route['ketua-jurusan/layanan/lainnya/surat-keterangan-beasiswa'] = 'layanan/lainnya/suratketeranganbeasiswa';
$route['ketua-jurusan/layanan/lainnya/surat-keterangan-berkelakuan-baik'] = 'layanan/lainnya/suratketeranganberkelakuanbaik';
$route['ketua-jurusan/layanan/lainnya/surat-keterangan-masih-kuliah'] = 'layanan/lainnya/suratketeranganmasihkuliah';
$route['sekretaris-jurusan'] = 'dashboard';
$route['koordinator-ta'] = 'dashboard';
$route['koordinator-ta/layanan/ta/pengajuan-judul'] = 'layanan/ta/pengajuanjudul';
$route['koordinator-ta/layanan/ta/pengajuan-judul/(:num)'] = 'layanan/ta/pengajuanjudul/detail/$1';
$route['koordinator-ta/layanan/ta/pengajuan-judul/replace/(:num)'] = 'layanan/ta/pengajuanjudul/replace/$1';
$route['koordinator-ta/layanan/ta/seminar-proposal'] = 'layanan/ta/seminarproposal';
$route['koordinator-ta/layanan/ta/seminar-proposal/(:num)'] = 'layanan/ta/seminarproposal/detail/$1';
$route['koordinator-ta/layanan/ta/seminar-hasil'] = 'layanan/ta/seminarhasil';
$route['koordinator-ta/layanan/ta/seminar-hasil/(:num)'] = 'layanan/ta/seminarhasil/detail/$1';
$route['koordinator-ta/layanan/ta/sidang'] = 'layanan/ta/sidang';
$route['koordinator-ta/layanan/ta/sidang/(:num)'] = 'layanan/ta/sidang/detail/$1';
$route['dosen'] = 'dashboard';
$route['dosen/layanan/ta/pengajuan-judul'] = 'layanan/ta/pengajuanjudul';
$route['dosen/layanan/ta/pengajuan-judul/(:num)'] = 'layanan/ta/pengajuanjudul/detail/$1';
$route['dosen/layanan/ta/pengajuan-judul/replace/(:num)'] = 'layanan/ta/pengajuanjudul/replace/$1';
$route['dosen/layanan/ta/seminar-proposal'] = 'layanan/ta/seminarproposal';
$route['pegawai'] = 'dashboard';
$route['pegawai/layanan/khs'] = 'layanan/khs';
$route['pegawai/layanan/khs/(:num)'] = 'layanan/khs/detail/$1';
$route['pegawai/layanan/khs/replace/(:num)'] = 'layanan/khs/replace/$1';
$route['pegawai/layanan/khs/delete/(:num)'] = 'layanan/khs/delete/$1';
$route['pegawai/layanan/ta/pengajuan-judul'] = 'layanan/ta/pengajuanjudul';
$route['pegawai/layanan/ta/seminar-proposal'] = 'layanan/ta/seminarproposal';
$route['pegawai/layanan/ta/seminar-proposal/(:num)'] = 'layanan/ta/seminarproposal/detail/$1';
$route['pegawai/layanan/ta/seminar-proposal/download/(:num)'] = 'layanan/ta/seminarproposal/download/$1';
$route['pegawai/layanan/ta/seminar-hasil'] = 'layanan/ta/seminarhasil';
$route['pegawai/layanan/ta/seminar-hasil/(:num)'] = 'layanan/ta/seminarhasil/detail/$1';
$route['pegawai/layanan/ta/seminar-hasil/download/(:num)'] = 'layanan/ta/seminarhasil/download/$1';
$route['pegawai/layanan/ta/sidang'] = 'layanan/ta/sidang';
$route['pegawai/layanan/ta/sidang/(:num)'] = 'layanan/ta/sidang/detail/$1';
$route['pegawai/layanan/ta/sidang/download/(:num)'] = 'layanan/ta/sidang/download/$1';
$route['pegawai/layanan/transkip-nilai-sementara'] = 'layanan/transkipnilaisementara';
$route['pegawai/layanan/transkip-nilai-sementara/(:num)'] = 'layanan/transkipnilaisementara/detail/$1';
$route['pegawai/layanan/transkip-nilai-sementara/replace/(:num)'] = 'layanan/transkipnilaisementara/replace/$1';
$route['pegawai/layanan/transkip-nilai-sementara/delete/(:num)'] = 'layanan/transkipnilaisementara/delete/$1';
$route['pegawai/layanan/transkip-nilai-akhir'] = 'layanan/transkipnilaiakhir';
$route['pegawai/layanan/transkip-nilai-akhir/(:num)'] = 'layanan/transkipnilaiakhir/detail/$1';
$route['pegawai/layanan/transkip-nilai-akhir/replace/(:num)'] = 'layanan/transkipnilaiakhir/replace/$1';
$route['pegawai/layanan/transkip-nilai-akhir/delete/(:num)'] = 'layanan/transkipnilaiakhir/delete/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-aktif-kuliah'] = 'layanan/lainnya/suratketeranganaktifkuliah';
$route['pegawai/layanan/lainnya/surat-keterangan-aktif-kuliah/(:num)'] = 'layanan/lainnya/suratketeranganaktifkuliah/detail/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-aktif-kuliah/replace/(:num)'] = 'layanan/lainnya/suratketeranganaktifkuliah/replace/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-aktif-kuliah/download/(:num)'] = 'layanan/lainnya/suratketeranganaktifkuliah/download/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-aktif-kuliah/delete/(:num)'] = 'layanan/lainnya/suratketeranganaktifkuliah/delete/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-beasiswa'] = 'layanan/lainnya/suratketeranganbeasiswa';
$route['pegawai/layanan/lainnya/surat-keterangan-beasiswa/(:num)'] = 'layanan/lainnya/suratketeranganbeasiswa/detail/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-beasiswa/replace/(:num)'] = 'layanan/lainnya/suratketeranganbeasiswa/replace/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-beasiswa/download/(:num)'] = 'layanan/lainnya/suratketeranganbeasiswa/download/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-beasiswa/delete/(:num)'] = 'layanan/lainnya/suratketeranganbeasiswa/delete/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-berkelakuan-baik'] = 'layanan/lainnya/suratketeranganberkelakuanbaik';
$route['pegawai/layanan/lainnya/surat-keterangan-berkelakuan-baik/(:num)'] = 'layanan/lainnya/suratketeranganberkelakuanbaik/detail/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-berkelakuan-baik/replace/(:num)'] = 'layanan/lainnya/suratketeranganberkelakuanbaik/replace/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-berkelakuan-baik/download/(:num)'] = 'layanan/lainnya/suratketeranganberkelakuanbaik/download/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-berkelakuan-baik/delete/(:num)'] = 'layanan/lainnya/suratketeranganberkelakuanbaik/delete/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-masih-kuliah'] = 'layanan/lainnya/suratketeranganmasihkuliah';
$route['pegawai/layanan/lainnya/surat-keterangan-masih-kuliah/(:num)'] = 'layanan/lainnya/suratketeranganmasihkuliah/detail/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-masih-kuliah/replace/(:num)'] = 'layanan/lainnya/suratketeranganmasihkuliah/replace/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-masih-kuliah/download/(:num)'] = 'layanan/lainnya/suratketeranganmasihkuliah/download/$1';
$route['pegawai/layanan/lainnya/surat-keterangan-masih-kuliah/delete/(:num)'] = 'layanan/lainnya/suratketeranganmasihkuliah/delete/$1';
$route['ketua-kelas'] = 'dashboard';