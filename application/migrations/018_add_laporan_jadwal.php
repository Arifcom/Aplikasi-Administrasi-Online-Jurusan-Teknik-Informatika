<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_laporan_jadwal extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'laporan_jadwal_id'=>
                        array(
                                'type'          => 'INT',
                                'unsigned'      => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'konfirmasi_dosen'=>
                        array(
                                'type'          => 'ENUM("Iya","Tidak")',
                                'null'          => FALSE,
                        ),
                        'konfirmasi_ketua_kelas'=>
                        array(
                                'type'          => 'ENUM("Iya","Tidak")',
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
                $this->dbforge->add_key('laporan_jadwal_id', TRUE);
                $this->dbforge->create_table('laporan_jadwal');
        }

        public function down()
        {
                $this->dbforge->drop_table('laporan_jadwal');
        }
}