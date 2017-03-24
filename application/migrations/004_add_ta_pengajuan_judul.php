<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_ta_pengajuan_judul extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'ta_pengajuan_judul_id'=>
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
                        'email'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'judul'=>
                        array(
                                'type'          => 'TEXT'
                        ),
                        'calon_pembimbing'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'status_calon_pembimbing'=>
                        array(
                                'type'          => 'ENUM("Diterima","Ditolak")',
                                'null'          => FALSE,
                        ),
                        'status'=>
                        array(
                                'type'          => 'ENUM("Terima","Terima Bersyarat","Revisi","Tolak")',
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
                $this->dbforge->add_key('ta_pengajuan_judul_id', TRUE);
                $this->dbforge->create_table('ta_pengajuan_judul');
        }

        public function down()
        {
                $this->dbforge->drop_table('ta_pengajuan_judul');
        }
}