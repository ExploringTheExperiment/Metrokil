<?php 

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ContentModel extends Model 
{
    protected $table = 'content';
    protected $useTimestamps = True;
    protected $primaryKey = 'id_content';
    protected $allowedFields = ['title', 'author', 'picture', 'text', 'category', 'slug'];

    public function getContent($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else{
            return $this->where(['id_content' => $id])->first();
        }
    }

    // public function getAll()
    // {
    //     $builder = $this->db->table('content');
    //     $builder->join('category', 'category.id_category = content.' )
    // }
}