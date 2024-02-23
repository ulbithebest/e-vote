<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $allowedFields = ['nama', 'username', 'password'];

    public function getUser($username = null)
    {
        if ($username === null) {
            return $this->findAll();
        } else {
            return $this->where('username', $username)->findAll();
        }
    }
}