<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MobileModel;

class Mobile extends BaseController {
    
    public function index()
    {
        $mobileModel = new MobileModel();
        $data['mobiles'] = $mobileModel->findAll();
        return view('mobile/index', $data);
    }
}