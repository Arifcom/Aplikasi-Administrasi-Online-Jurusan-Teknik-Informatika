<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_transkip_nilai_sementara extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'transkip_nilai_sementara_id'=>
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
                        'kontak_nomor'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'gambar'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'gambar'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'keterangan'=>
                        array(
                                'type'          => 'ENUM("Memohon pembuatan surat transkip nilai sementara.")',
                                'null'          => FALSE,
                                'default'       => 'Memohon pembuatan surat transkip nilai sementara.',
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
                $this->dbforge->add_key('transkip_nilai_sementara_id', TRUE);
                $this->dbforge->create_table('transkip_nilai_sementara');
        }

        public function down()
        {
                $this->dbforge->drop_table('transkip_nilai_sementara');
        }
}