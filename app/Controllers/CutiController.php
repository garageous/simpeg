<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CutiController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Cuti Karyawan',
            'subtitle' => 'Form Permohonan Cuti'
        ];
        return view('karyawan/v_cuti', $data);
    }
}
