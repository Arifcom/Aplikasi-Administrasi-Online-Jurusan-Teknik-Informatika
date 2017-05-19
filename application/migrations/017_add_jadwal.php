<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_jadwal extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'jadwal_id'=>
                        array(
                                'type'          => 'INT',
                                'unsigned'      => TRUE,
                                'auto_increment' => TRUE
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