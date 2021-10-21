<?php
namespace App\Controllers;
use App\Models\penggunaModel12200011;
use config\services;

class login extends baseController{

    public function ceklogin()
    {
        $e = $this->request->getPost('email');
        $s = $this->request->getPost('sandi');

        $v = $this->validate([
            'email' => 'required',
            'sandi' => 'required'
        ], [
            'email' => [
                'required' => 'Email tidak boleh kosong'
            ],
            'sandi' => [
                'required' => 'Sandi tidak boleh kosong'
            ]
        ]);

        

        $this->session->set('email', $e);
        $this->session->set('sandi', $s);
        
        if( $v == false ){
            $this->session->setFlashData('validator', $this->validator);
            return redirect()->to('/login');
        } else {

            $vlogin = (new penggunaModel12200011())->ceklogin($e, $s);

            if($vlogin == null){
                return redirect()->to('/login')->with('error', 'user dan sandi salah');
            } else {
                $this->session->set('sudahLogin', true);
                return redirect()->to('/beranda');
            }   
        }
    }

    public function beranda(){

        }
}