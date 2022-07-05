<?php

namespace App\Controllers;
use App\Models\ContentModel;

use App\Controllers\BaseController;

class BlogCategory extends BaseController
{
    public function index()
    {
        return view('pages-admin/blogcategory/index');
    }
    public function create()
    {
        return view('pages-admin/blogcategory/create');
    }
    public function store()
    {
       
    }
    public function show()
    {
        return view('pages-admin/blogcategory/show');
    }
    public function edit()
    {
        return view('pages-admin/blogcategory/edit');
    }
    public function destroy()
    {
       
    }
    
}
