<?php 

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $useTimestamps = false;
    protected $primaryKey = 'id_category';
    protected $returnType = 'array';
    protected $allowedFields = ['name', 'code', 'desc_category'];

    public function getCategory($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else{
            return $this->where(['id_category' => $id])->first();
        }
    }
}