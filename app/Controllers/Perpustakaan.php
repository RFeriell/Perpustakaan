<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Perpustakaan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman | Home'
        ];
        return view('perpustakaan/index', $data);
    }




    // controller untuk mengecek table
    public function contoh()
    {
        // Model Data Pulisher
        $PublisherModel = new \App\Models\PublisherModel();
        $publisher = $PublisherModel->findAll();

        // Model Data Category
        $categoryModel = new \App\Models\CategoryModel();
        $category = $categoryModel->findAll();

        //Model Data Book
        $db = \Config\Database::connect();
        $book = $db->query("SELECT * FROM book 
        INNER JOIN category ON book.id_category = category.id
        INNER JOIN publisher ON book.id_publisher = publisher.id
        ");
        $data = [
            'title' => 'Halaman | Eksperimental',
            'publish' => $publisher,
            'category' => $category,
            'book' => $book
        ];

        return view('perpustakaan/table-contoh', $data);
    }
}
