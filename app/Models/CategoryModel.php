<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table      = 'menu_categories';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'slug'];
}
