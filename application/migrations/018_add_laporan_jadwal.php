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
                        'jadwal_id'=>
                        array(
                                'type'          => 'INT'
                        ),
                        'konfirmasi_dosen'=>
                        array(
                                'type'          => 'ENUM("Iya","Tidak")',
                                'null'          => FALSE,
                                'default'       => 'Tidak'
                        ),
                        'konfirmasi_ketua_kelas'=>
                        array(
                                'type'          => 'ENUM("Iya","Tidak")',
                                'null'          => FALSE,
                                'default'       => 'Tidak'
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
                $this->db->query("ALTER TABLE laporan_jadwal ADD FOREIGN KEY (jadwal_id) REFERENCES jadwal(jadwal_id)");
        }

        public function down()
        {
                $this->dbforge->drop_table('laporan_jadwal');
        }
}