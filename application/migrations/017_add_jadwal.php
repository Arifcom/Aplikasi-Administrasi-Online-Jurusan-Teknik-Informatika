<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_jadwal extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'jadwal_id'=>
                        array(
                                'type'          => 'INT',
                                'auto_increment' => TRUE
                        ),
                        'mata_kuliah'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'kelas'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'dosen'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'ketua_kelas'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'hari'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
                        ),
                        'kode_hari'=>
                        array(
                                'type'          => 'INT'
                        ),
                        'jam'=>
                        array(
                                'type'          => 'TIME'
                        ),
                        'ruangan'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50'
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
                $this->dbforge->add_key('jadwal_id', TRUE);
                $this->dbforge->create_table('jadwal');
        }

        public function down()
        {
                $this->dbforge->drop_table('jadwal');
        }
}