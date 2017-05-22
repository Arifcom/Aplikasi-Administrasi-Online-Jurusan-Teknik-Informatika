<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_transkip_nilai_akhir extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'transkip_nilai_akhir_id'=>
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
                        'tanggal_sidang'=>
                        array(
                                'type'          => 'DATE'
                        ),
                        'nomor_ijazah'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'tanggal_ijazah'=>
                        array(
                                'type'          => 'DATE'
                        ),
                        'judul_bahasa_indonesia'=>
                        array(
                                'type'          => 'TEXT'
                        ),
                        'judul_bahasa_inggris'=>
                        array(
                                'type'          => 'TEXT'
                        ),
                        'gambar'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
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
                $this->dbforge->add_key('transkip_nilai_akhir_id', TRUE);
                $this->dbforge->create_table('transkip_nilai_akhir');
        }

        public function down()
        {
                $this->dbforge->drop_table('transkip_nilai_akhir');
        }
}