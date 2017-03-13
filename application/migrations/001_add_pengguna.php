<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_pengguna extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'pengguna_id'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50',
                        ),
                        'email'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50',
                                'unique'        => TRUE
                        ),
                        'password'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '250',
                        ),
                        'nama_depan'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50',
                        ),
                        'nama_belakang'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50',
                        ),
                        'hak_akses'=>
                        array(
                                'type'          => 'ENUM("Ketua Jurusan","Sekretaris Jurusan","Dosen","Pegawai","Ketua Kelas","Mahasiswa")',
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
                $this->dbforge->add_key('pengguna_id', TRUE);
                $this->dbforge->create_table('pengguna');
        }

        public function down()
        {
                $this->dbforge->drop_table('pengguna');
        }
}