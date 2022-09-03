<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TrainingController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Training Karyawan',
            'subtitle' => 'Form Permohonan Training'
        ];
        return view('karyawan/v_training', $data);
    }
}
