<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_ta_seminar_hasil extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'ta_seminar_hasil_id'=>
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
                        'judul'=>
                        array(
                                'type'          => 'TEXT'
                        ),
                        'pembimbing_1'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'pembimbing_2'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'penguji_1'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'penguji_2'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'tanggal_seminar'=>
                        array(
                                'type'          => 'DATE'
                        ),
                        'waktu_seminar'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'tempat_seminar'=>
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
                                'type'          => 'ENUM("Memohon pembuatan surat seminar hasil ta.")',
                                'null'          => FALSE,
                                'default'       => 'Memohon pembuatan surat seminar hasil ta.',
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
                $this->dbforge->add_key('ta_seminar_hasil_id', TRUE);
                $this->dbforge->create_table('ta_seminar_hasil');
        }

        public function down()
        {
                $this->dbforge->drop_table('ta_seminar_hasil');
        }
}