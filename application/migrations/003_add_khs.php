<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_khs extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'khs_id'=>
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
                $this->dbforge->add_key('khs_id', TRUE);
                $this->dbforge->create_table('khs');
        }

        public function down()
        {
                $this->dbforge->drop_table('khs');
        }
}