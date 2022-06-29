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
    public function product()
    {
        return view('pages/product');
    }

    #list konten dari db
    protected $contentModel;
    public function __construct()
    {
        $this->ContentModel = new ContentModel();
    }
    public function showcontent()
    {
        $content = $this-> ContentModel -> findAll();   

        $context = [
            'title'=>'HALAMAN DEPAN WEBSITE',
            'content'=>$content
        ];

        return view('pages/content', $context);
    }

    public function add()
    {
        return view('pages/add-content');
    }

    public function kirim()
    {   
        $title= $this->request->getVar('title');
        $author = $this->request->getVar('author');
        $date = $this->request->getVar('date_posted');
        $img = $this->request->getVar('picture');
        $txt = $this->request->getVar('text');
        $cat = $this->request->getVar('category');
        $slug = $this->request->getVar('slug');
 
        $data = [
            'title' => $title,
            'author' => $author,
            'date_posted' => $date,
            'picture' => $img,
            'text' => $txt,
            'category' => $cat,
            'slug' => $slug,            
            ];

        $this -> ContentModel ->save($data);
        return redirect()->to('/showcontent');
    }

    public function ubah($id)
    {
        $data['content'] = $this->ContentModel->getContent($id);

        return view('pages/content-edit', $data);
  
    }
 
    public function update()
    {   
        $id = $this->request->getVar('id_content');
        $title= $this->request->getVar('title');
        $author = $this->request->getVar('author');
        $date = $this->request->getVar('date_posted');
        $img = $this->request->getVar('picture');
        $txt = $this->request->getVar('text');
        $cat = $this->request->getVar('category');
        $slug = $this->request->getVar('slug');
 
        $data = [
            'id_content' => $id,
            'title' => $title,
            'author' => $author,
            'date_posted' => $date,
            'picture' => $img,
            'text' => $txt,
            'category' => $cat,
            'slug' => $slug,            
        ];
        
        $this -> ContentModel ->save($data);
        return redirect()->to('/showcontent');
    }

    public function delete($id = null)
    {
        $model = new ContentModel();
        $data['content'] = $model->where('id_content', $id)->delete();
        return redirect()->to( '/showcontent' );
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
    public function show_content()
    {
        return view('pages/content');
    }
    

}
