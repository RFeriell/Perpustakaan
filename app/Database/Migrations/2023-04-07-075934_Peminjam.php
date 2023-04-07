<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class Peminjam extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'birthdate' => [
                'type' => 'DATE',
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'gender' => [
                'type' => 'enum',
                'constraint' => ['L', 'P'],
            ],
            'contact' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('peminjam');
    }

    public function down()
    {
        $this->forge->dropTable('peminjam');
    }
}
