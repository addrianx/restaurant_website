<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\BlogModel;

class BlogController extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        return $this->response->setJSON($model->findAll());
    }

    public function show($slug)
    {
        $model = new BlogModel();
        $data = $model->where('slug', $slug)->first();

        if (!$data) {
            return $this->failNotFound("Blog tidak ditemukan");
        }

        return $this->response->setJSON($data);
    }
}
