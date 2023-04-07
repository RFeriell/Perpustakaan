<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Meminjam extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'id_browser' => [
                'type' => 'INT',
            ],
            'id_book' => [
                'type' => 'INT',
            ],
            'id_staf' => [
                'type' => 'INT',
            ],
            'release_date' => [
                'type' => 'DATE',
            ],
            'due_date' => [
                'type' => 'DATE',
            ],
            'note' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('meminjam');
    }

    public function down()
    {
        $this->forge->dropTable('meminjam');
    }
}
