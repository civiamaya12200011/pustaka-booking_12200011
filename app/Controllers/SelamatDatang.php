<?php
namespace App\controllers;

/**
 * created by phpstrom.
 * user: civiamaya12200011
 * date: 27/09/2021
 * time: 14:12
 */
class SelamatDatang extends basecontroller {

    public function hal_awal(){
        return 'hello saya belajar ci4';
    }

    public function beranda_login(){
        return view('halaman/login',[
            'vl' => $this->session->getFlashData('validator'),
            'email' => $this->session->get('email'),
            'sandi' => $this->session->get('sandi'),
            'error' => $this->session->getFlashData('error')
        ]);
    }

    public function daftar_member(){
        return view('halaman/daftar_member');
    }

    public function hal_beranda(){
        return view('halaman/beranda', [
            'email' => $this->session->get('email'),
            'sandi' => $this->session->get('sandi')
        ]);
    }
}