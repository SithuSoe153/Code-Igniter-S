<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table      = 'posts'; //require
    protected $primaryKey = 'post_id'; //require

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['post_title', 'post_content'];

    // Dates
    // protected $useTimestamps = false;
    // // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // // protected $cleanValidationRules = true;

    // // Callbacks
    // // protected $allowCallbacks = true;
    // // protected $beforeInsert   = [];
    // // protected $afterInsert    = [];
    // // protected $beforeUpdate   = [];
    // // protected $afterUpdate    = [];
    // // protected $beforeFind     = [];
    // // protected $afterFind      = [];
    // // protected $beforeDelete   = [];
    // // protected $afterDelete    = [];
}
