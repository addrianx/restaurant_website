<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table      = 'blogs';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'slug', 'excerpt', 'content', 'image'];

    protected $useTimestamps = true;
}
