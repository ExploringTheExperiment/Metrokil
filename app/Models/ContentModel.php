<?php 

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ContentModel extends Model 
{
    protected $table = 'content';
    protected $useTimestamps = True;
    protected $primaryKey = 'id_content';
    protected $allowedFields = ['title', 'author', 'picture', 'text', 'id_category', 'slug'];

    public function getContent($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else{
            return $this->where(['id_content' => $id])->first();
        }
    }
}