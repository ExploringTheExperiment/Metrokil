<?php

namespace App\Controllers;
use App\Models\ContentModel;

class Category extends BaseController
{
    protected $contentCategory;
    public function __construct()
    {
        $this->CategoryModel = new ContentModel();
    }
    public function index()
    {
        $category= $this-> CategoryModel -> findAll();   

        $context = [
            'content'=>$category
        ];

        return view('pages/category/list-category.php', $context);
    }

    public function addCategory()
    {


        return view('pages/category/add-category.php');
    }
}