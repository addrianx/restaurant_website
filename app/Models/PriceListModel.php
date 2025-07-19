<?php
namespace App\Models;

use CodeIgniter\Model;

class PriceListModel extends Model
{
    protected $table      = 'price_lists';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'description', 'file_url'];
}
