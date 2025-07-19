<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class ContactController extends BaseController
{
    public function index()
    {
        $model = new ContactModel();
        return $this->response->setJSON($model->first());
    }
}
