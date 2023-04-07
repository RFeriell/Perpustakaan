<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Publisher extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'contact' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('publisher');
    }

    public function down()
    {
        $this->forge->dropTable('publisher');
    }
}
