<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function main()
    {
        return view('welcome_message');
    }

    public function index()
    {
        return view('perpustakaan/index');
    }
}
