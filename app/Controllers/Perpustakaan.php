<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;

class Perpustakaan extends BaseController
{
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
        $publisher = $db->query("SELECT * FROM publisher");
        $category = $db->query("SELECT * FROM category");
        $data = [
            'title' => 'Halaman Tambah Buku',
            'publisher' => $publisher,
            'category' => $category
        ];

        return view('perpustakaan/tambahBuku', $data);
    }


    //controller untuk tampilan peminjam
    public function tambah_borrower()
    {
        $db = \Config\Database::connect();
        $borrower = $db->query("SELECT * FROM borrower");
        $data = [
            'title' => 'Halaman Peminjam Buku',
            'borrower' => $borrower
        ];

        return view('Perpustakaan/tambah_borrower', $data);
    }

    //controller tampilan untuk borrower
    public function borrower()
    {
        $db = \Config\Database::connect();
        $borrower = $db->query("SELECT * FROM borrower");

        $data = [
            'title' => 'Halaman Peminjam',
            'borrower' => $borrower
        ];

        return view('Perpustakaan/tampilan_borrower', $data);
    }

    //funtion untuk mengirimkan data tambah buku
    public function save()
    {
        $db = \Config\Database::connect();

        //variable untuk mengambil value post di form tambah buku
        $title = $this->request->getPost('title');
        $author = $this->request->getPost('author');
        $publication_year = $this->request->getPost('publication_year');
        $id_publisher = $this->request->getPost('id_publisher');
        $id_category = $this->request->getPost('id_category');
        $quantity = $this->request->getPost('quantity');

        //query untuk meninsertkan data ke table book
        $save = $db->query("
                INSERT INTO `book` (`id`, `title`, `author`, `publication_year`, `id_publisher`, `id_category`, `quantity`) VALUES (NULL, '$title', '$author', '$publication_year', '$id_publisher', '$id_category', '$quantity')
                ");

        return redirect()->to('/table_book');
    }

    public function send()
    {
        $db = \Config\Database::connect();
        $name = $this->request->getPost('name');
        $birthdate = $this->request->getPost('birthdate');
        $address = $this->request->getPost('address');
        $gender = $this->request->getPost('gender');
        $contact = $this->request->getPost('contact');
        $email = $this->request->getPost('email');

        $send = $db->query("INSERT INTO `borrower` (`id`, `name`, `birthdate`, `address`, `gender`, `contact`, `email`) VALUES (NULL, '$name', '$birthdate', '$address', '$gender', '$contact', '$email')
        ");

        return redirect()->to('/table_borrower');
    }




















    // controller untuk mengecek table
    public function table()
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
            'title' => 'Halaman | Table',
            'publish' => $publisher,
            'category' => $category,
            'book' => $book
        ];

        return view('perpustakaan/table', $data);
    }
}
