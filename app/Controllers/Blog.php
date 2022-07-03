<?php

namespace App\Controllers;
use App\Models\ContentModel;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        return view('pages-admin/blog/index');
    }
    public function create()
    {
        return view('pages-admin/blog/create');
    }
    public function store()
    {
       
    }
    public function show()
    {
        return view('pages-admin/blog/show');
    }
    public function edit()
    {
        return view('pages-admin/blog/edit');
    }
    public function destroy()
    {
       
    }
    
}
