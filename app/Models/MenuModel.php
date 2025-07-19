<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table      = 'menus';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'description', 'price', 'image', 'category_id', 'is_available'];

    protected $useTimestamps = true;

    protected $with = ['category'];

    public function getMenus($id = null)
    {
        if ($id) {
            return $this->asArray()
                        ->where(['id' => $id])
                        ->first();
        }

        return $this->asArray()->findAll();
    }

    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }
}
