<?php

namespace App\Controllers;
use App\Models\CategoryModel;

class ContentCategory extends BaseController
{
    protected $categoryModel;
    public function __construct()
    {
        $this->CategoryModel = new CategoryModel();
    }
    public function index()
    {
        $category= $this-> CategoryModel -> findAll();   

        $context = [
            'category'=>$category
        ];

        return view('pages-admin/contentcategory/list-category.php', $context);
    }

    public function addCategory()
    {
        return view('pages-admin/contentcategory/add-category.php');
    }

    public function kirimCategory()
    {   
        $name= $this->request->getVar('name');
        $code = $this->request->getVar('code');
        $desc = $this->request->getVar('desc_category');

        $data = [
            'name' => $name,
            'code' => $code,
            'desc_category' => $desc,           
            ];

        $this -> CategoryModel ->save($data);
        return redirect()->to('/admin/category_content');
    }

    public function ubahCategory($id)
    {
        $data['category'] = $this->CategoryModel->getCategory($id);

        return view('pages-admin/contentcategory/edit-category.php', $data);
  
    }

    public function updateCategory()
    {   
        $id = $this->request->getVar('id_category');
        $name= $this->request->getVar('name');
        $code = $this->request->getVar('code');
        $desc = $this->request->getVar('desc_category');
 
        $data = [
            'id_category' => $id,
            'name' => $name,
            'code' => $code,
            'desc_category' => $desc,           
        ];
        
        $this -> CategoryModel ->save($data);
        return redirect()->to('/admin/category_content');
    }

    public function deleteCategory($id = null)
    {
        $model = new CategoryModel();
        $data['category'] = $model->where('id_category', $id)->delete();
        return redirect()->to( '/admin/category_content' );
    }


}