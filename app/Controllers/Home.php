<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SIMPEG',
            'subtitle' => 'Dashboard'
        ];
        return view('karyawan/v_dashboard', $data);
    }
}
