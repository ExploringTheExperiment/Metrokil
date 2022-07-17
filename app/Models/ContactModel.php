<?php 

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ContactModel extends Model 
{
    protected $table = 'contact';
    protected $useTimestamps = True;
    protected $primaryKey = 'id_contact';
    protected $allowedFields = ['name', 'email', 'addres', 'phone', 'text', 'cc_category'];

    public function getContact($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else{
            return $this->where(['id_contact' => $id])->first();
        }
    }
}