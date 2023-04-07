<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbBuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'author' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'publisher_year' => [
                'type' => 'VARCHAR',
                'constraint' => '4',
            ],
            'id_publisher' => [
                'type' => 'INT',
            ],
            'id_category' => [
                'type' => 'INT',
            ],
            'quantly' => [
                'type' => 'INT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}
