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

/**
 * method untuk cek login dari table pengguanModel12200011
 * berdasarkan nama dan password
 * @var string $user
 * @var string pass
 */
public function ceklogin($user, $pass){
    return $this->where('nama', $user)
                ->where('password', md5($pass) )->first(); 
    }

}
