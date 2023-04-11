<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;

class Perpustakaan extends BaseController
{
    protected $BookModel;
    public function __construct()
    {
        $this->BookModel = new BookModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman | Home',
        ];
        
        return view('perpustakaan/index', $data);
    }

    //controller untuk tampilan buku
    public function book()
    {
        //query menghuungkan database book
        $db = \Config\Database::connect();
        $book = $db->query("SELECT * FROM book 
       INNER JOIN category ON book.id_category = category.id
       INNER JOIN publisher ON book.id_publisher = publisher.id
       ");
        $data = [
            'title' => 'Halaman Tampilan Buku',
            'book' => $book
        ];

        return view('perpustakaan/tampilan_buku', $data);
    }

    public function tambahbuku()
    {
        //query menghuungkan database book
        //query menghuungkan database book
        $db = \Config\Database::connect();
        $book = $db->query("SELECT * FROM book 
        INNER JOIN category ON book.id_category = category.id
        INNER JOIN publisher ON book.id_publisher = publisher.id
        ");
        $data = [
            'title' => 'Halaman Tambah Buku',
            'book' => $book
        ];

        return view('perpustakaan/tambahBuku', $data);
    }

    public function save()
    {
        $db = \Config\Database::connect();
        $book = $db->query("SELECT * FROM book 
        INNER JOIN category ON book.id_category = category.id
        INNER JOIN publisher ON book.id_publisher = publisher.id
        ");

        //variable untuk mengambil value post di form tambah buku
        $title = $this->request->getPost('title');
        $author = $this->request->getPost('author');
        $publication_year = $this->request->getPost('publication_year');
        $id_publisher = $this->request->getPost('id_publisher');
        $id_category = $this->request->getPost('id_category');
        $quantity = $this->request->getPost('quantity');

        //query untuk meninsertkan data ke table book
        $save = $db->query("
        INSERT INTO `book` (`id`, `title`, `author`, `publication_year`, `id_publisher`, `id_category`, `quantity`) VALUES (NULL, '$title', '$author', '$publication_year', '$id_publisher', '$id_category', '$quantity');
        ");

        return redirect()->to('/book');
    }

    //controller untuk tampilan peminjam
    // belumselesai
    // public function borrower()
    // {
    //     $db = \Config\Database::connect();
    //     $book = $db->query("SELECT * FROM borrower 
    //    INNER JOIN category ON book.id_category = category.id
    //    INNER JOIN publisher ON book.id_publisher = publisher.id
    //    ");
    //     $data = [
    //         'title' => 'Halaman Peminjam Buku',
    //         'borrower' => $borrower
    //     ];
    // }





















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
