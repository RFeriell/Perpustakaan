<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table            = 'book';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['title', 'author', 'publication_year', 'id-publisher', 'id-category', 'quantity'];
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;



}
