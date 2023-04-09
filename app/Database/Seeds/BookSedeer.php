<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookSedeer extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'Violet Evergarden',
            'author' => 'Kana Akatsuki',
            'publication_year' => '2018',
            'id_publisher' => 3,
            'id_category' => 2,
            'quantity' => 24,

        ];

        // // Simple Queries
        $this->db->query('INSERT INTO book (title, author, publication_year, id_publisher, id_category, quantity) VALUES(:title:, :author:, :publication_year:, :id_publisher:, :id_category:, :quantity:)', $data);

        // // Using Query Builder
        // //  $this->db->table('users')->insert($data);

    }
}
