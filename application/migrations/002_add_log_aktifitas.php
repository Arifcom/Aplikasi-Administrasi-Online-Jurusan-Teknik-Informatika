<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_log_aktifitas extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'log_aktifitas_id'=>
                        array(
                                'type'          => 'INT',
                                'unsigned'      => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'pengguna_id'=>
                        array(
                                'type'          => 'VARCHAR',
                                'constraint'    => '50',
                        ),
                        'log_aktifitas'=>
                        array(
                                'type'          => 'TEXT'
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
                $this->dbforge->add_key('log_aktifitas_id', TRUE);
                $this->dbforge->create_table('log_aktifitas');
                $this->db->query("ALTER TABLE log_aktifitas ADD FOREIGN KEY (pengguna_id) REFERENCES pengguna(pengguna_id)");
        }

        public function down()
        {
                $this->dbforge->drop_table('log_aktifitas');
        }
}