<?php

namespace App\Controllers;
use App\Models\ContentModel;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('pages-admin/index');
    }
    
}
