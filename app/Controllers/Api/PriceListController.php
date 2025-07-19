<?php
namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\PriceListModel;

class PriceListController extends BaseController
{
    public function index()
    {
        $model = new PriceListModel();
        return $this->response->setJSON($model->findAll());
    }
}
