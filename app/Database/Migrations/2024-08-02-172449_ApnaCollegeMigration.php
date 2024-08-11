<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ApnaCollegeMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'auto_increment' => true,
                'unsigned' => true, 
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'phone' => [
                'type' => 'INT',
                'constraint' => '150',
            ],
            'created_at datetime default current_timestamp',
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('apnacollegestudents');
    }

    public function down()
    {
        //
        $this->forge->dropTable('apnacollegestudents');
    }
}
