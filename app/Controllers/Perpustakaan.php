<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Perpustakaan extends BaseController
{
    public function index()
    {
        return view('perpustakaan/index');
    }
}
