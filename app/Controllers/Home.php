<?php

namespace App\Controllers;
use App\Models\ContentModel;
use App\Models\CategoryModel;
use CodeIgniter\I18n\Time;

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
    protected $categoryModel;
    public function __construct()
    {
        $this->ContentModel = new ContentModel();
        $this->CategoryModel = new CategoryModel();
    }
    public function showcontent()
    {
        $content = $this-> ContentModel -> findAll();  

        $context = [
            'content'=>$content
        ];

        return view('pages/content', $context);
    }

    public function add()
    {
        // session();
        $model = new CategoryModel();
        $category = $model->findAll();
        $data = [
            'category' => $category,
            'validation'=> \Config\Services::validation()
        ];

        return view('pages/add-content', $data);
    }

    public function kirim()
    {   
        #validasi input
        if (!$this->validate([
            'title' => [
                'rules' => 'required[title]|is_unique[content.title]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} judul content sudah ada, ganti judul lain.'
                ]
                ],
            // 'picture' => [
            //     'rules' => 'uploaded[picture]|is_image[picture]',
            //     'errors' => [
            //         'uploaded' => 'Pilih Gambar terlebih dahulu',
            //         'is_image' => 'Pilihlah File dengan format png, jpg, dan jpeg',
                    
            //     ]
            // ]
        ])) {
            // $validation = \Config\Services::validation(); 
            // return redirect()->to('pages/add-content')->withInput()->with('validation', $validation);
            return redirect()->to('/add')->withInput();
        }
        #ambil gambar
        $filePicture = $this->request->getFile('picture');
        $namaPicture = $filePicture->getName();
        $filePicture->move('img/', $namaPicture);
        
        $slugjudul = url_title($this->request->getVar('title'),'-',true);
        $this->ContentModel->save([
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'picture' => $namaPicture,
            'created_at' => Time::now(),
            'text' => $this->request->getVar('text'),
            'category' => $this->request->getVar('category'),
            'slug' => $slugjudul
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');
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
        $date = Time::now();
        $img = $this->request->getVar('picture');
        $txt = $this->request->getVar('text');
        $cat = $this->request->getVar('category');
        $slug = $this->request->getVar('slug');
 
        $data = [
            'id_content' => $id,
            'title' => $title,
            'author' => $author,
            'created_at' => $date,
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
