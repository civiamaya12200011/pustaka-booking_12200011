<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel12200011 extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna_12200011';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];


}
