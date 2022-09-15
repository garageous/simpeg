<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MutasiController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mutasi Karyawan',
            'subtitle' => 'Mutasi Karyawan'
        ];
        return view('staffHRD/v_lihatMutasi', $data);
    }
}
