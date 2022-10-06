<?php

namespace App\Controllers;

use App\Models\KaryawanModel;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    protected $KaryawanModel;
    public function __construct()
    {
        $this->KaryawanModel = new KaryawanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('v_login', $data);
    }

    public function loginProcess()
    {
        $data = $this->request->getVar('username');
        // $user = $
        session()->setFlashdata('error', 'Username tidak ditemukan.');
    }
}
