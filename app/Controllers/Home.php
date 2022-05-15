<?php

namespace App\Controllers;

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
    public function product()
    {
        return view('pages/product');
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
}
