<?php

namespace App\Controllers;
use App\Models\ContentModel;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
    public function about()
    {
        return view('pages/about');
    }
    public function about_details()
    {
        return view('pages/about-details');
    }
    public function service()
    {
        return view('pages/service');
    }
    protected $contentModel;
    public function __construct()
    {
        $this->ContentModel = new ContentModel();
    }
    public function product()
    {
        $content = $this-> ContentModel -> findAll();   

        $context = [
            'title'=>'HALAMAN DEPAN WEBSITE',
            'content'=>$content
        ];


        return view('pages/product', $context);

        // return view('pages/product');
    }
    public function news()
    {
        return view('pages/news');
    }
    public function news_details()
    {
        return view('pages/news_details');
    }
    public function search()
    {
        return view('pages/searchpage');
    }
    public function add()
    {
        return view('pages/add-content');
    }

}
