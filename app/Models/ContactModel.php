<?php
namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table      = 'contacts';
    protected $primaryKey = 'id';

    protected $allowedFields = ['phone', 'email', 'address', 'whatsapp_link', 'map_embed'];
}
