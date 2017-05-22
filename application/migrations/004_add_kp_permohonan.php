<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_kp_permohonan extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'kp_permohonan_id'=>
                        array(
                                'type'          => 'INT',
                                'unsigned'      => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'nama_depan'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),                       
                        'nama_belakang'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),                       
                        'nim'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'semester'=>
                        array(
                                'type'          => 'INT',
                                'constraint'    => '2'
                        ),
                        'alamat_mahasiswa'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'kontak_nomor'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'instansi'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'alamat_instansi'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'judul'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'waktu_pelaksanaan'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'keterangan'=>
                        array(
                                'type'          => 'ENUM("Memohon pembuatan surat permohonan kp.")',
                                'null'          => FALSE,
                                'default'       => 'Memohon pembuatan surat permohonan kp.',
                        ),
                        'status'=>
                        array(
                                'type'          => 'ENUM("Belum","Sedang","Selesai")',
                                'null'          => FALSE,
                        ),
                        'date'=>
                        array(
                                'type'          => 'DATE'
                        ),
                        'time'=>
                        array(
                                'type'          => 'TIME'
                        ),
                ));
                $this->dbforge->add_key('kp_permohonan_id', TRUE);
                $this->dbforge->create_table('kp_permohonan');
        }

        public function down()
        {
                $this->dbforge->drop_table('kp_permohonan');
        }
}