<?php
namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class MenuController extends BaseController
{
    public function index()
    {
        $model = new MenuModel();
        return $this->response->setJSON($model->findAll());
    }

    public function show($id)
    {
        $model = new MenuModel();
        $data = $model->find($id);

        if (!$data) {
            return $this->failNotFound("Menu ID $id tidak ditemukan");
        }

        return $this->response->setJSON($data);
    }
}
