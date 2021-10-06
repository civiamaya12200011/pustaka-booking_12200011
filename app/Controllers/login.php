<?php
namespace App\Controllers;

class login extends baseController{

    public function ceklogin(){
        $e = $this->request->getPost('email');
        $s = $this->request->getPost('sandi');
        return view('halaman/beranda', ['email'=>$e, 'sandi'=>$s]);
    }
}