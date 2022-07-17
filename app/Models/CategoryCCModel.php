<?php 

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CategoryCCModel extends Model 
{
    protected $table = 'category_cc';
    protected $useTimestamps = True;
    protected $primaryKey = 'id_cc_category';
    protected $allowedFields = ['name', 'code'];

    public function getCategoryCC($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else{
            return $this->where(['id_cc_category' => $id])->first();
        }
    }
}