<?php

namespace App\Models;

use CodeIgniter\Model;

class MobileModel extends Model 
{
    protected $table = 'mobile';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'price', 'status', 'description', 'photo'];
}