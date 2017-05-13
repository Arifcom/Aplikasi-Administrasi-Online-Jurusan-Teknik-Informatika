<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_surat_keterangan_beasiswa extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'surat_keterangan_beasiswa_id'=>
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
                        'tempat_lahir'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),                       
                        'tanggal_lahir'=>
                        array(
                                'type'          => 'DATE'
                        ),
                        'alamat'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'kontak_nomor'=>
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
                $this->dbforge->add_key('surat_keterangan_beasiswa_id', TRUE);
                $this->dbforge->create_table('surat_keterangan_beasiswa');
        }

        public function down()
        {
                $this->dbforge->drop_table('surat_keterangan_beasiswa');
        }
}