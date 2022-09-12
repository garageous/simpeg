<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ResignController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Resign Karyawan',
            'subtitle' => 'Form Permohonan Resign'
        ];
        return view('karyawan/v_resign', $data);
    }
}
