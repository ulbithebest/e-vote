<?php

namespace App\Models;

use CodeIgniter\Model;

class VotingModel extends Model
{
    protected $table = 'kandidat';
    protected $primaryKey = 'id_kandidat';
    protected $allowedFields = ['nama_kandidat', 'vote'];
}
