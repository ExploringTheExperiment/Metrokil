<?php

namespace App\Controllers;
use App\Models\ContentModel;

use App\Controllers\BaseController;

class ContactCategory extends BaseController
{
    public function index()
    {
        return view('pages-admin/contactcategory/index');
    }
    public function create()
    {
        return view('pages-admin/contactcategory/create');
    }
    public function store()
    {
       
    }
    public function show()
    {
        return view('pages-admin/contactcategory/show');
    }
    public function edit()
    {
        return view('pages-admin/contactcategory/edit');
    }
    public function destroy()
    {
       
    }
    
}
