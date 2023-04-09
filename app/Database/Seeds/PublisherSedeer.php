<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PublisherSedeer extends Seeder
{
    public function run()
    {
        // $data = [
        //     'nama' => 'putra',
        //     'alamat' => 'jln. Gedung sate Cimahi',
        //     'kontak' => '08956778757',
        // ];

        // // Simple Queries
        // $this->db->query('INSERT INTO publisher (name, address, contact) VALUES(:nama:, :alamat:, :kontak:)', $data);

        // // Using Query Builder
        // //  $this->db->table('users')->insert($data);

        $data = [
            'category' => 'komedi',

        ];

        // Simple Queries
        $this->db->query('INSERT INTO category (category) VALUES(:category:)', $data);
    }
}
