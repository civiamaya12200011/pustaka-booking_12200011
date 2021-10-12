<?php

namespace App\Database\Seeds;

use App\Models\penggunaModel12200011;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder12200011 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'civia ',
                'password' => md5('12200011')
            ],
            [
                'nama' => 'admin',
                'password' => md5('12345')
            ],
            [
                'nama' => '12200011',
                'password' => md5('civia maya angela permatasari')
            ]
        ];

        $p = new penggunaModel12200011();
        $p ->insertBatch($data);
    }
}
