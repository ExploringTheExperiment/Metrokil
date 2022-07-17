<?php

namespace App\Controllers;
use App\Models\CategoryCCModel;

class ContactCategory extends BaseController
{
    protected $categoryCCModel;
    public function __construct()
    {
        $this->CategoryCCModel = new CategoryCCModel();
    }
    public function index()
    {
        $cc_category= $this-> CategoryCCModel -> findAll();   

        $data = [
            'cc_category'=>$cc_category
        ];
        // return dd($cc_category);

        return view('pages-admin/contactcategory/index.php', $data);
    }
    public function create()
    {
        return view('pages-admin/contactcategory/create');
    }
    public function store()
    {
        $name= $this->request->getVar('name');
        $code = $this->request->getVar('code');

        $data = [
            'name' => $name,
            'code' => $code,        
            ];

        $this -> CategoryCCModel ->save($data);
        return redirect()->to('/admin/category_contact');
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
